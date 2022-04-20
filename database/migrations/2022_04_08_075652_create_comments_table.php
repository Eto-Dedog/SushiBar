<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('comment_id');
            $table->bigInteger('commentProduct_id')->unsigned();
            $table->bigInteger('commentUser_id')->unsigned();
            $table->string('comment_text');
            $table->integer('comment_rate');
            $table->timestamps();

            $table->foreign('commentProduct_id')->references('product_id')->on('products');
            $table->foreign('commentUser_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
