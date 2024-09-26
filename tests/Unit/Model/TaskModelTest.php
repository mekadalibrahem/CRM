<?php

namespace Tests\Unit\Model;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\TaskSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskModelTest extends TestCase
{
    use RefreshDatabase ;
    
    public   $tablename = '';
    public $model ;
    public $seeder ;
    public function setUp(): void{
        parent::setUp();
        $this->model = new Task();
        $this->seeder = TaskSeeder::class ;
        $this->tablename  = $this->model->getTable();
        User::factory()->create();
        Client::factory()->create();
        Project::factory()->create();
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
        $item->title = "Updated";
        $item->save();
        $this->assertDatabaseHas($this->tablename , [
            'title' =>"Updated"
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
        
        $this->assertDatabaseCount($this->tablename , 100);
    }

}
