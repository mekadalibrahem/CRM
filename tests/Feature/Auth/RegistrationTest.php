<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'lname' => 'test User',
            'terms_accepted' => 1,
            'email' => 'test@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
        $user = User::where('email' , '=' , 'test@example.com')->first();
        if(!$user) {$this->fail("User not saved");}

        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard', absolute: false));
    }
}
