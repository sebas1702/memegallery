<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags' , function(Blueprint $table) {

           $table->increments('id');
           $table->string('name');
           $table->timestamps();


        });


            //Tabla pivote
       Schema::create('imagen_tag' , function(Blueprint $table){

               $table->increments('id');
               $table->integer('imagen_id')->unsigned();
               $table->integer('tag_id')->unsigned();

               $table->foreing('imagen_id')->references('id')->on('imagenes');
               $table->foreing('tag_id')->references('id')->on('tags');

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
        Schema::drop('tags');
    }
}
