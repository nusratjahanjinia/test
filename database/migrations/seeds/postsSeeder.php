<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('posts')->delete();

        $posts = array(
            ['id' => 1, 'title' => 'Post 1', 'subject' => 'post-1', 'status' => 1, 'completed' => false, 'description' => 'My first post', 'created_at' => new DateTime, 'updated_at' => new DateTime,'catagory_id'=>'1'],
            ['id' => 2, 'title' => 'Post 2', 'subject' => 'post-2', 'status' => 2, 'completed' => false, 'description' => 'My first post', 'created_at' => new DateTime, 'updated_at' => new DateTime,'catagory_id'=>'2'],
            ['id' => 3, 'title' => 'Post 3', 'subject' => 'post-3', 'status' => 3, 'completed' => false, 'description' => 'My first post', 'created_at' => new DateTime, 'updated_at' => new DateTime,'catagory_id'=>'3'],

        );

        //// Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }

}