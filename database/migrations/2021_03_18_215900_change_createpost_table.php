<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCreatepostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('Description', 2000)->Nullable();
            $table->timestamps();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('Comment', 2000)->Nullable();
            $table->foreign('projects_id')
                ->references('id')->on('projects')
                ->onDelete('cascade');
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
        Schema::dropIfExists('products');
        Schema::dropIfExists('comments');
    }
}
