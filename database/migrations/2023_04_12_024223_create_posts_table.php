<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->text('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image');
            $table->unsignedBigInteger('category');
            $table->integer('like_count')->default('0');
            $table->integer('comment_count')->default('0');
            $table->tinyInteger('published')->default('1');
            $table->timestamps();
        });
        
        Schema::table('posts', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
