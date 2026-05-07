<?php

declare(strict_types=1);

use App\Models\User;

describe('Authentication', function () {
    it('can register a new user', function () {
        $response = $this->post(route('register'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'email_confirmation' => 'john@example.com',
            'password' => 'SecurePass1!',
            'password_confirmation' => 'SecurePass1!',
        ]);

        $response->assertRedirect(route('dashboard'));
        expect(User::where('email', 'john@example.com')->exists())->toBeTrue();
    });

    it('can login with valid credentials', function () {
        $user = User::factory()->create([
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post(route('login'), [
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);
    });

    it('cannot login with invalid credentials', function () {
        User::factory()->create([
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post(route('login'), [
            'email' => 'john@example.com',
            'password' => 'wrong-password',
        ]);

        $response->assertRedirect();
        $this->assertGuest();
    });

    it('guest cannot access dashboard', function () {
        $this->get(route('dashboard'))
            ->assertRedirect(route('login'));
    });
});
