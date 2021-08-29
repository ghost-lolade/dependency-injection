<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Task;
use \App\Models\User;
use Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $task = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task1 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task2 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task3 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task4 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task5 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task6 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task7 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task8 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        $task9 = Task::create(['title' => $faker->paragraph, 'user_id' => 1]);
        // \App\Models\User::factory(10)->create();
    }
}
