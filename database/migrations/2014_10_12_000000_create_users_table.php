<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('password');
            $table->integer('point')->default(0);
            $table->integer('prime')->default(0);
            $table->integer('workinfo')->default(0);
            $table->integer('rakuten')->default(0);
            $table->integer('cafe')->default(0);
            $table->integer('movie')->default(0);
            $table->integer('amusement')->default(0);
            $table->integer('shopping')->default(0);
            $table->integer('branches')->default(0);
            $table->integer('tokyo')->default(0);
            $table->integer('osaka')->default(0);
            $table->integer('fukuoka')->default(0);
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
        Schema::dropIfExists('users');
    }
}
