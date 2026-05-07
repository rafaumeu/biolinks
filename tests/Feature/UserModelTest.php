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

    it('casts password to hashed', function () {
        $user = User::factory()->create(['password' => 'plaintext']);

        expect($user->password)->not->toBe('plaintext')
            ->and(password_verify('plaintext', $user->password))->toBeTrue();
    });

    it('has many links', function () {
        $user = User::factory()->create();
        Link::factory()->count(3)->create(['user_id' => $user->id]);

        expect($user->links)->toHaveCount(3);
    });
});
