<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('news', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('titre', 255)->unique();
            $table->text('intro')->nullable();
            $table->text('contenu');
            $table->boolean('publication')->default(0);
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            $table->integer('rubrique_id')->unsigned();
            $table->foreign('rubrique_id')->references('id')->on('rubriques');
            //$table->foreign('image_id')->unsigned()->references('id')->on('images');
            //$table->foreign('rubrique_id')->unsigned()->references('id')->on('rubriques');

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
        Schema::drop('news');
	}

}
