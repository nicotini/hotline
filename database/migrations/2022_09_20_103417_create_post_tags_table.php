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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->timestamps();
            //idx
            $table->index('post_id', 'post_tags_post_idx');
            $table->index('tag_id', 'post_tags_tag_idx');
            //fk
            $table->foreign('post_id', 'post_tag_post_fk')->on('posts')->references('id');
            $table->foreign('tag_id', 'post_tag_tag_fk')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
};
