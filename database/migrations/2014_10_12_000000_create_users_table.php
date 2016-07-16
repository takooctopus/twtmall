<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('twtid');
            $table->string('email');
            $table->tinyInteger('campus');
            $table->string('username');
            $table->string('realname');
            $table->string('stunumber');
            $table->string('phone');
            $table->string('qq');
            $table->string('avatar');
            $table->string('token');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
