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
        Schema::create('en_posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('category_id')->nullable();
            $table -> string('preview_image')->nullable();
            $table -> string('main_image')->nullable();
            $table->timestamps();
            $table -> softDeletes();

            $table->index('category_id', 'en_post_category_idx');
            $table->foreign('category_id', 'en_post_category_fk')->on('en_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_posts');
    }
};
