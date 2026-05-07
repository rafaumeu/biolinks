<?php

declare(strict_types=1);

use App\Models\User;

describe('Biolink Public Page', function () {
    it('can view a users biolink page by handler', function () {
        $user = User::factory()->create(['handler' => 'johndoe']);

        $this->get('/johndoe')
            ->assertStatus(200);
    });

    it('returns 404 for nonexistent handler', function () {
        $this->get('/nonexistent')
            ->assertStatus(404);
    });
});
