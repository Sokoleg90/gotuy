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
        Schema::create('en_comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('post_id');
            $table->text('message');
            $table->timestamps();

            $table->index('post_id', 'en_comments_post_idx');
            $table->foreign('post_id', 'en_comments_post_fk')->on('en_posts')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_comments');
    }
};
