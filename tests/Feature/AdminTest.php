<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase ;
    private $admin ;

    public  function setUp() :void 
    {
        parent::setUp();
        $this->seed(PermissionSeeder::class);
        $this->seed(UserSeeder::class);
        
    }
    
    public function test_render_admin_dashoard(): void
    {
        $admin = User::where('email' ,'=', 'admin@crm.com')->first();
        $this->post('/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);
        
            $response = $this->actingAs($admin)->get('admin/dashboard');
            $response->assertStatus(200); 
            $response = $this->actingAs($admin)->get('admin/users');
            $response->assertStatus(200); 
            $response = $this->actingAs($admin)->get('admin/clients');
            $response->assertStatus(200); 
            $response = $this->actingAs($admin)->get('admin/projects');
            $response->assertStatus(200); 
            $response = $this->actingAs($admin)->get('admin/tasks');
            $response->assertStatus(200); 
    }


    public function test_render_admin_dashoard_invlaid(): void
    {
        $user = User::whereNot('email' ,'=', 'admin@crm.com')->first();
        if(!$user){
            $this->fail('Not find user');
        }else{
            $this->post('/login', [
                'email' => $user->email,
                'password' => 'password',
            ]);
                $response = $this->actingAs($user)->get('admin/dashboard');
    
                $response->assertStatus(403); 
                $response = $this->actingAs($user)->get('admin/users');
                $response->assertStatus(403); 
                $response = $this->actingAs($user)->get('admin/clients');
                $response->assertStatus(403); 
                $response = $this->actingAs($user)->get('admin/projects');
                $response->assertStatus(403); 
                $response = $this->actingAs($user)->get('admin/tasks');
                $response->assertStatus(403); 
        }
    }
}
