<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtractosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('extractos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('libro_id')->unsigned();
            $table->text('extracto_texto');
            $table->integer('votos');
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
		Schema::drop('extractos');
	}

}
