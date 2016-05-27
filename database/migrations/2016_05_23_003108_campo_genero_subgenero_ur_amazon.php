<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CampoGeneroSubgeneroUrAmazon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('libros', function (Blueprint $table) {
            //
            $table->string('url_amazon')->after('url_img');
            $table->enum('genero',['NOVELA','ENSAYO','POESIA','CUENTO','TEATRO']);
            $table->string('subgenero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('libros', function (Blueprint $table) {
            //
            
        });
    }
}
