<?php

use Illuminate\Database\Migrations\Migration;

class CreateOpencodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opencode', function($table){
			$table->increments('id');
			$table->text('code');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('opencode');
	}

}