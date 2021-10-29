<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCommentTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name', 2000)->Nullable();
            $table->string('password', 2000)->Nullable();
            $table->string('email', 2000)->Nullable();
            $table->timestamps();
        });



        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('Description', 2000)->Nullable();
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('Comment', 2000)->Nullable();
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('comments', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('comments', function ($table) {
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('comments');
    }
}
