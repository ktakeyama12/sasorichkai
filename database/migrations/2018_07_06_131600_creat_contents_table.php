<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('name');
            $table->string('content');
            $table->integer('user_id')->unsigned()->index();
            $table->string('user_name');
            $table->integer('user_point');
            $table->timestamps();
            
             // Foreign key constraint
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            // $table->foreign('user_name')->references('name')->on('users')->onDelete('cascade');;
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
