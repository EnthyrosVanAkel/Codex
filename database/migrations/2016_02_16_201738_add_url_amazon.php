<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlAmazon extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('libros', function(Blueprint $table)
		{
			//
			$table->string('url_amazon');
			$table->string('genero');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('libros', function(Blueprint $table)
		{
			//
			$table->string('url_amazon');
			$table->string('genero');

		});
	}

}
