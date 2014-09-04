<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::create('links', function ($table) {
		    $table->increments('lid');
		    $table->string('short');
		    $table->string('title');
		    $table->string('parent');
		    // $table->timestamps();
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

		Schema::drop('links');
	}

}
