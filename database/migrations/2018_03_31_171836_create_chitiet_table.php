<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet', function (Blueprint $table) {
            $table->increments('id');
          $table->string('name');
            $table->string('image');
            $table->string('title');
            $table->string('decription');
            $table->mediumtext('content');
            $table->string('view');
            $table->string('masp');
            $table->integer('fk_product')->unsigned();
            $table->foreign('fk_product')->references('id')->on('product')->onDelete('cascade');
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
        Schema::dropIfExists('chitiet');
    }
}
