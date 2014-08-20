<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table)
	    {
	        $table->increments('id');
	        $table->string('username');
	        $table->string('firstname');
	        $table->string('lastname');
	        $table->string('country');
	        $table->string('region');
	        $table->integer('zip');
	        $table->string('place');
	        $table->string('street');
	        $table->string('street_number');
	        $table->date('birthday');
	        $table->boolean('activated');
	        $table->string('password');
	        $table->string('path_to_avatar');
	        $table->string('phone');
	        $table->text('user_info');
	        $table->date('regitstration_date');
	        $table->date('activation_date');
	        $table->string('email')->unique();
	        $table->integer('user_group_id');
	        $table->date('created_at');
	        $table->date('updated_at');
	        $table->string('remember_token');

	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
