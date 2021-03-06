<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) 
        {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');

            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');


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
        Schema::dropIfExists('post_categories');
    }
};
