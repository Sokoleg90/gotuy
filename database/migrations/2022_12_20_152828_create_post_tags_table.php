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
        Schema::create('ru_post_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');
            //IDX
            $table->index('post_id', 'ru_post_tag_post_idx');
            $table->index('tag_id', 'ru_post_tag_tag_idx');
            //FK
            $table->foreign('post_id', 'ru_post_tag_post_fk')->on('ru_posts')->references('id');
            $table->foreign('tag_id', 'ru_post_tag_tag_fk')->on('ru_tags')->references('id');
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
        Schema::dropIfExists('ru_post_tags');
    }
};
