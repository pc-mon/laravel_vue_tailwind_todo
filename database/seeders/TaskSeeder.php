<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Task1', 'project_id' => 1, 'status' => 0
        ]);

        DB::table('tasks')->insert([
            'title' => 'Task2', 'project_id' => 2, 'status' => 0
        ]);

        DB::table('tasks')->insert([
            'title' => 'Task3', 'project_id' => 3, 'status' => 1
        ]);

        DB::table('tasks')->insert([
            'title' => 'Task4', 'project_id' => 3, 'status' => 0
        ]);
    }
}
