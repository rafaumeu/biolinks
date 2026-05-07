<?php

declare(strict_types = 1);

use App\Models\Link;
use App\Models\User;

describe('Link CRUD', function () {
    beforeEach(function () {
        $this->user = User::factory()->create(['handler' => 'testuser']);
    });

    it('can create a link', function () {
        $this->actingAs($this->user)
            ->post(route('links.store'), [
                'link' => 'https://example.com',
                'name' => 'Example',
            ])
            ->assertRedirect(route('dashboard'));

        expect($this->user->links)->toHaveCount(1);
        expect($this->user->links->first()->link)->toBe('https://example.com');
    });

    it('validates link creation', function () {
        $this->actingAs($this->user)
            ->post(route('links.store'), [])
            ->assertSessionHasErrors(['link', 'name']);
    });

    it('can update a link', function () {
        $link = Link::factory()->create(['user_id' => $this->user->id]);

        $this->actingAs($this->user)
            ->put(route('links.edit', $link), [
                'link' => 'https://updated.com',
                'name' => 'Updated',
            ])
            ->assertRedirect(route('dashboard'));

        $link->refresh();
        expect($link->link)->toBe('https://updated.com')
            ->and($link->name)->toBe('Updated');
    });

    it('can delete a link', function () {
        $link = Link::factory()->create(['user_id' => $this->user->id]);

        $this->actingAs($this->user)
            ->delete(route('links.destroy', $link))
            ->assertRedirect(route('dashboard'));

        expect(Link::find($link->id))->toBeNull();
    });

    it('cannot delete another users link', function () {
        $otherUser = User::factory()->create();
        $link      = Link::factory()->create(['user_id' => $otherUser->id]);

        $this->actingAs($this->user)
            ->delete(route('links.destroy', $link))
            ->assertForbidden();

        expect(Link::find($link->id))->not->toBeNull();
    });

    it('can move a link up', function () {
        $linkA = Link::factory()->create(['user_id' => $this->user->id, 'sort' => 0]);
        $linkB = Link::factory()->create(['user_id' => $this->user->id, 'sort' => 1]);

        $this->actingAs($this->user)
            ->patch(route('links.up', $linkB))
            ->assertRedirect();

        $linkA->refresh();
        $linkB->refresh();
        expect($linkB->sort)->toBe(0)
            ->and($linkA->sort)->toBe(1);
    });

    it('can move a link down', function () {
        $linkA = Link::factory()->create(['user_id' => $this->user->id, 'sort' => 0]);
        $linkB = Link::factory()->create(['user_id' => $this->user->id, 'sort' => 1]);

        $this->actingAs($this->user)
            ->patch(route('links.down', $linkA))
            ->assertRedirect();

        $linkA->refresh();
        $linkB->refresh();
        expect($linkA->sort)->toBe(1)
            ->and($linkB->sort)->toBe(0);
    });
});
