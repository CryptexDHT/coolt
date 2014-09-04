<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::create('threads', function ($table) {
		    $table->increments('tid');
		    $table->string('short')->unique();
		    $table->string('email');
		    $table->string('title');
		    $table->longText('body');
		    $table->string('parent');
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
		//
		Schema::drop('threads');

	}

}
