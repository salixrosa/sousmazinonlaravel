<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateContentLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_content_location', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('desc', 140);
			$table->integer('partial_content_id')->unsigned();
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
		Schema::drop('template_content_location');
	}

}
