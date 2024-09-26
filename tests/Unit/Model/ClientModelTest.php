<?php

namespace Tests\Unit\Model;

use App\Models\Client;
use Database\Seeders\ClientSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClientModelTest extends TestCase
{
    use RefreshDatabase ;
    
    public   $tablename = '';
    public $model ;
    public $seeder ;
    public function setUp(): void{
        parent::setUp();
        $this->model = new Client();
        $this->seeder = ClientSeeder::class ;
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
        $item->contact_name = "Updated";
        $item->save();
        $this->assertDatabaseHas($this->tablename , [
            'contact_name' =>"Updated"
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
        
        $this->assertDatabaseCount($this->tablename , 50);
    }

}
