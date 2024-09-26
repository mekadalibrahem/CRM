<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PermissionsTest extends TestCase
{
    use RefreshDatabase ;

    public function setUp(): void {
        parent::setUp();
        $this->seed(PermissionSeeder::class);
        $this->seed(UserSeeder::class);
    }
    public function test_data_seed(): void
    {
        $this->assertDatabaseCount('users', 50);
        $this->assertDatabaseCount('permissions' , 2);
        $this->assertDatabaseCount('roles' , 2);
        $this->assertDatabaseCount('role_has_permissions' , 2);
        $this->assertDatabaseCount('model_has_roles' , 51);
        
    }
    public function test_roles(){
        $this->assertDatabaseHas('roles', [
            'name' => 'admin'
        ]);
        $this->assertDatabaseHas('roles', [
            'name' => 'user'
        ]);
    }
    public function test_permissions(){
        $this->assertDatabaseHas('permissions' , [
            'name' => 'manage users'
        ]);
        $this->assertDatabaseHas('permissions' , [
            'name' => 'delete'
        ]);
    }
    public function test_admin_user(){
        $user  = User::first();
        $this->assertTrue($user->hasRole('admin'));
        $this->assertTrue($user->hasRole('user'));
        $this->assertTrue($user->hasPermissionTo('manage users'));
        $this->assertTrue($user->hasPermissionTo('delete'));
        
    }
}
