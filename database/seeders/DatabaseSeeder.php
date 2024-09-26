<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@crm.com',
        ]);

        User::factory()->count(49)->create()->make();
        Client::factory()->count(50)->create()->make();
        Project::factory()->count(50)->create()->make();
        Task::factory()->count(100)->create()->make();
    }
}
