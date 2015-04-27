<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubriquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('rubriques', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom', 255)->unique();
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            //$table->integer('test_id');
            //$table->foreign('image_id')->unsigned()->references('id')->on('images');

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
        Schema::drop('rubriques');
	}

}
