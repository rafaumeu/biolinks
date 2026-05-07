<?php

declare(strict_types = 1);

use App\Models\Link;
use App\Models\User;

describe('User Model', function () {
    it('can be created with factory', function () {
        $user = User::factory()->create();

        expect($user)->toBeInstanceOf(User::class)
            ->and($user->exists)->toBeTrue()
            ->and($user->email)->not->toBeEmpty();
    });

    it('has fillable attributes', function () {
        $user = new User();

        expect($user->getFillable())->toContain(
            'name',
            'email',
            'password',
            'handler',
            'description',
            'photo',
        );
    });

    it('hides password and remember_token', function () {
        $user = User::factory()->create();

        $json = $user->toArray();

        expect($json)->not->toHaveKey('password')
            ->and($json)->not->toHaveKey('remember_token');
    });

    it('casts email_verified_at to datetime and password to hashed', function () {
        $user  = new User();
        $casts = $user->casts();

        expect($casts)->toHaveKey('email_verified_at')
            ->and($casts['email_verified_at'])->toBe('datetime')
            ->and($casts)->toHaveKey('password')
            ->and($casts['password'])->toBe('hashed');
    });

    it('has many links', function () {
        $user = User::factory()->create();
        Link::factory()->count(3)->create(['user_id' => $user->id]);

        expect($user->links)->toHaveCount(3);
    });
});
