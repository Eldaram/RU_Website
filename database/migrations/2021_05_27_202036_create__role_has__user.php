<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleHasUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('_role_has_user', function (Blueprint $table) {
            $table->bigInteger('Users_id')->unsigned();
            $table->foreign('Users_id')->references('id')->on('users');
            $table->bigInteger('Role_id')->unsigned();
            $table->foreign('Role_id')->references('id')->on('role');
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
        Schema::dropIfExists('_role_has_user');
        Schema::enableForeignKeyConstraints();
    }
}
