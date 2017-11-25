<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFullContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('full_content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('slug', 25);
			$table->timestamps();
			$table->text('content');
			$table->char('title', 75);
			$table->boolean('active')->default(0);
			$table->boolean('page_only')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('full_content');
	}

}
