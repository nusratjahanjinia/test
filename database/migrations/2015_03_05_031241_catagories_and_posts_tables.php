<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatagoriesAndPostsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catagories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->text('title');
			$table->timestamps();
		});


        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('title')->default('');
            $table->text('subject')->default('');
            $table->text('status')->default('');
            $table->boolean('completed')->default(false);
            $table->text('description')->default('');
            $table->int('catagory id')->default('');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
		Schema::drop('catagories');
	}

}
