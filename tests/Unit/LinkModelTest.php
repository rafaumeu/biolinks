<?php

declare(strict_types=1);

use App\Models\Link;
use App\Models\User;

describe('Link Model', function () {
    it('can be created with factory', function () {
        $user = User::factory()->create();
        $link = Link::factory()->create(['user_id' => $user->id]);

        expect($link)->toBeInstanceOf(Link::class)
            ->and($link->exists)->toBeTrue();
    });

    it('has fillable attributes', function () {
        $link = new Link();

        expect($link->getFillable())->toContain('link', 'name');
    });

    it('belongs to a user', function () {
        $user = User::factory()->create();
        $link = Link::factory()->create(['user_id' => $user->id]);

        expect($link->user)->toBeInstanceOf(User::class)
            ->and($link->user->id)->toBe($user->id);
    });

    it('can move up', function () {
        $user = User::factory()->create();
        $linkA = Link::factory()->create(['user_id' => $user->id, 'sort' => 0]);
        $linkB = Link::factory()->create(['user_id' => $user->id, 'sort' => 1]);

        $linkB->moveUp();
        $linkB->refresh();
        $linkA->refresh();

        expect($linkB->sort)->toBe(0)
            ->and($linkA->sort)->toBe(1);
    });

    it('can move down', function () {
        $user = User::factory()->create();
        $linkA = Link::factory()->create(['user_id' => $user->id, 'sort' => 0]);
        $linkB = Link::factory()->create(['user_id' => $user->id, 'sort' => 1]);

        $linkA->moveDown();
        $linkA->refresh();
        $linkB->refresh();

        expect($linkA->sort)->toBe(1)
            ->and($linkB->sort)->toBe(0);
    });

    it('does nothing when moving up at the top', function () {
        $user = User::factory()->create();
        $link = Link::factory()->create(['user_id' => $user->id, 'sort' => 0]);

        $originalSort = $link->sort;
        $link->moveUp();
        $link->refresh();

        expect($link->sort)->toBe($originalSort);
    });

    it('does nothing when moving down at the bottom', function () {
        $user = User::factory()->create();
        $link = Link::factory()->create(['user_id' => $user->id, 'sort' => 0]);

        $originalSort = $link->sort;
        $link->moveDown();
        $link->refresh();

        expect($link->sort)->toBe($originalSort);
    });
});
