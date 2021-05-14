<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("id_discord");
            $table->integer("role");
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
        Schema::dropIfExists('role');
        Schema::enableForeignKeyConstraints();
    }
}
