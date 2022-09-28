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
        Schema::create('post_user_likes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();

            $table->index('post_id', 'pul_post_idx');
            $table->index('user_id', 'pul_user_idx');

            $table->foreign('post_id', 'pul_post_fk')->on('posts')->references('id');
            $table->foreign('user_id', 'pul_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_user_likes');
    }
};
