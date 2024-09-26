<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class RelationshipsModelTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void{
        parent::setUp();
        $this->seed(DatabaseSeeder::class);
    }
        public function test_seed(): void
    {
       $this->assertDatabaseCount('users', 50);
       $this->assertDatabaseCount('clients', 50);
       $this->assertDatabaseCount('projects', 50);
       $this->assertDatabaseCount('tasks', 100);
    }

    public function test_user_relations(): void {
       
        $user = User::first();
        if(!$user){$this->fail('user not found');}
        $user_tasks = Task::where('user_id' ,  '=' , $user->id)->get();
        $user_tasks_re = $user->tasks ;
        $user_projects = Project::where('user_id' , '=',$user->id )->get();
        $user_projects_re = $user->projects ;

        $this->assertEquals($user_tasks->count() , $user_tasks_re->count());
        $this->assertEquals($user_projects->count() , $user_projects_re->count());

    }

    public function test_client_relations(){
        $client = Client::first();
        if(!$client){$this->fail('client not found');}
        $client_tasks = Task::where('client_id' ,  '=' , $client->id)->get();
        $client_tasks_re = $client->tasks ;
        $client_projects = Project::where('client_id' , '=',$client->id )->get();
        $client_projects_re = $client->projects ;
        
        $this->assertEquals($client_tasks->count()  , $client_tasks_re->count());
        $this->assertEquals($client_projects->count() , $client_projects_re->count());

    }

    public function test_project_relations(){
        $project = Project::first();
        if(!$project){$this->fail('project not found');}
        $project_tasks = Task::where('project_id' ,  '=' , $project->id)->get();
        $project_tasks_re = $project->tasks ;
        $this->assertEquals($project_tasks->count()  , $project_tasks_re->count());
        $user = User::where('id' , '=' , $project->user_id)->first();
        $user_project = $project->user ;
        $this->assertEquals($user->id  , $user_project->id);
        $client = Client::where('id' , '=' , $project->client_id)->first();
        $client_project = $project->client ;
        $this->assertEquals($client->id  , $client_project->id);
    }

    public function test_task_relations(){
        $task = Task::first();
        if(!$task){$this->fail('task not found');}
       
        $user = User::where('id' , '=' , $task->user_id)->first();
        $user_task = $task->user ;
        $this->assertEquals($user->id  , $user_task->id);
        $client = Client::where('id' , '=' , $task->client_id)->first();
        $client_task = $task->client ;
        $this->assertEquals($client->id  , $client_task->id);
        $project = Project::where('id' , '=' ,$task->project_id)->first();
        $project_task = $task->project ;
        $this->assertEquals($project->id , $project_task->id);    }


}
