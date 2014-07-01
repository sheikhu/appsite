<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('works', function(Blueprint $t)
		{
			$t->increments('id');
			$t->string('title');
			$t->text('description')->nullable();
			$t->string('client')->nullable();
			$t->date('date_project')->nullable();
			$t->string('service')->nullable();
			$t->string('image')->nullable();
			$t->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('works');
	}

}
