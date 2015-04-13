<?php

use Illuminate\Database\Seeder;

class CatagoriesSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('catagories')->delete();

        $catagories = array(
            ['id' => 1, 'name' => 'High Priority', 'title' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Medium Priority', 'title' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Low Priority', 'title' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],


        );

        // Uncomment the below to run the seeder
        DB::table('catagories')->insert($catagories);
    }

}