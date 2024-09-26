<?php

namespace Tests\Unit;

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase ;

class UserModelTest extends TestCase
{
   
    use RefreshDatabase ;
    
    public function setUp(): void{
        parent::setUp();
    }
    public function test_create_new_user(): void
    {   
        $this->assertDatabaseEmpty('users');
        User::factory()->create();
        $this->assertDatabaseCount('users' , 1);
    }

    public function test_update_user(){
        $this->assertDatabaseEmpty('users');
        User::factory()->create();
        $user = User::first();
        $user->email = "Updated@updated.com";
        $user->save();
        $this->assertDatabaseHas('users' , [
            'email' =>"Updated@updated.com"
        ]);
    }

    public function test_delete_user(){
        $this->assertDatabaseEmpty('users');
        User::factory()->create();
        $this->assertDatabaseCount('users' , 1);
        $user = User::first();
        $user->delete();
        $this->assertDatabaseEmpty('users');
       
    }

    public function test_seed_user_(){
        $this->assertDatabaseEmpty('users');
        $this->seed(UserSeeder::class);
        $this->assertDatabaseHas('users', [
            'name' => 'admin',
            'email' => 'admin@crm.com'
        ]);
        $this->assertDatabaseCount('users' , 50);
    }
}
