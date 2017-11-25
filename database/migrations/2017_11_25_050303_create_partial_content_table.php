<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartialContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partial_content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('content');
			$table->timestamps();
			$table->boolean('active')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partial_content');
	}

}
