<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("content")->nullable();
            $table->date("date");
            $table->bigInteger('Users_id')->unsigned();
            $table->foreign('Users_id')->references('id')->on('users');
            $table->bigInteger('Image_id')->unsigned()->nullable();
            $table->foreign('Image_id')->references('id')->on('image');
            $table->bigInteger('Monde_id')->unsigned()->nullable();
            $table->foreign('Monde_id')->references('id')->on('monde');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('news');
        Schema::enableForeignKeyConstraints();
    }
}
