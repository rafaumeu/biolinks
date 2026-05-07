<?php

declare(strict_types=1);

use App\Models\User;

describe('Guest Routes', function () {
    it('can access login page', function () {
        $this->get(route('login'))
            ->assertStatus(200);
    });

    it('can access register page', function () {
        $this->get(route('register'))
            ->assertStatus(200);
    });

    it('redirects unauthenticated users from dashboard', function () {
        $this->get(route('dashboard'))
            ->assertRedirect(route('login'));
    });

    it('redirects unauthenticated users from links create', function () {
        $this->get(route('links.create'))
            ->assertRedirect(route('login'));
    });

    it('redirects unauthenticated users from profile', function () {
        $this->get(route('profile'))
            ->assertRedirect(route('login'));
    });
});
