<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(500)->create();
         Category::factory(500)->create();
         Task::factory(500)->create();
    }
}
