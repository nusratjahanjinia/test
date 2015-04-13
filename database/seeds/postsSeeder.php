<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('posts')->delete();

        $posts = array(
            ['id' => 1, 'title' => 'Task 1', 'subject' => 'task-1', 'status' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'Task 2', 'subject' => 'task-2', 'status' => 2, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'Task 3', 'subject' => 'task-3', 'status' => 3, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        //// Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }

}