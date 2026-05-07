<?php

declare(strict_types=1);

use App\Models\Link;
use App\Models\User;

describe('Authenticated Routes', function () {
    beforeEach(function () {
        $this->user = User::factory()->create([
            'handler' => 'testuser',
        ]);
    });

    it('can access dashboard', function () {
        $this->actingAs($this->user)
            ->get(route('dashboard'))
            ->assertStatus(200);
    });

    it('can access links create page', function () {
        $this->actingAs($this->user)
            ->get(route('links.create'))
            ->assertStatus(200);
    });

    it('can access profile page', function () {
        $this->actingAs($this->user)
            ->get(route('profile'))
            ->assertStatus(200);
    });

    it('can access edit page for own link', function () {
        $link = Link::factory()->create(['user_id' => $this->user->id]);

        $this->actingAs($this->user)
            ->get(route('links.edit', $link))
            ->assertStatus(200);
    });

    it('cannot access edit page for another users link', function () {
        $otherUser = User::factory()->create();
        $link = Link::factory()->create(['user_id' => $otherUser->id]);

        $this->actingAs($this->user)
            ->get(route('links.edit', $link))
            ->assertForbidden();
    });

    it('can logout', function () {
        $this->actingAs($this->user)
            ->get(route('logout'))
            ->assertRedirect(route('login'));
    });
});
