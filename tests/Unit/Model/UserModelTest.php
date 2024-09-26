<?php

namespace Tests\Unit\Model;

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserModelTest extends TestCase
{
    
    use RefreshDatabase ;
    
    public   $tablename = '';
    public $model ;
    public $seeder ;
    public function setUp(): void{
        parent::setUp();
        $this->model = new User();
        $this->seeder = UserSeeder::class ;
        $this->tablename  = $this->model->getTable();
    }
    public function test_create_new(): void
    {   
        $this->assertDatabaseEmpty($this->tablename);
        $this->model::factory()->create();
        $this->assertDatabaseCount($this->tablename , 1);
    }

    public function test_update(){
        $this->assertDatabaseEmpty($this->tablename);
        $this->model::factory()->create();
        $item = $this->model::first();
        $item->email = "Updated@updated.com";
        $item->save();
        $this->assertDatabaseHas($this->tablename , [
            'email' =>"Updated@updated.com"
        ]);
    }

    public function test_delete(){
        $this->assertDatabaseEmpty($this->tablename);
        $this->model->factory()->create();
        $this->assertDatabaseCount($this->tablename , 1);
        $item = $this->model->first();
        $item->delete();
        $this->assertDatabaseEmpty($this->tablename);
       
    }

    public function test_seed(){
        $this->assertDatabaseEmpty($this->tablename);
        $this->seed($this->seeder);
        $this->assertDatabaseHas($this->tablename, [
            'name' => 'admin',
            'email' => 'admin@crm.com'
        ]);
        $this->assertDatabaseCount($this->tablename , 50);
    }

}
