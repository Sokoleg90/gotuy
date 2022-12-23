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
        Schema::create('ru_posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('category_id')->nullable();
            $table -> string('preview_image')->nullable();
            $table -> string('main_image')->nullable();
            $table->timestamps();
            $table -> softDeletes();

            $table->index('category_id', 'ru_post_category_idx');
            $table->foreign('category_id', 'ru_post_category_fk')->on('ru_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ru_posts');
    }
};
