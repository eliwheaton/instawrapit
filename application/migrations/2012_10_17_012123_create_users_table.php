<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
    		$table->increments('id');
    		$table->string('email');
    		$table->string('password');
    		$table->string('confirmed_key');
    		$table->boolean('confirmed')->default(0);
       		$table->string('first_name');
    		$table->string('last_name');
    		$table->string('address')->nullable();
    		$table->string('address2')->nullable();
    		$table->string('city')->nullable();
    		$table->string('state')->nullable();
    		$table->string('zip')->nullable();
    		$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}