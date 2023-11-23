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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('icon1')->nullable();
            $table->string('icon2')->nullable();
            $table->timestamps();

        });

        Schema::create('story_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('story_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title1')->nullable();
            $table->text('description1')->nullable();
            $table->text('tag1')->nullable();

            $table->string('title2')->nullable();
            $table->text('description2')->nullable();
            $table->text('tag2')->nullable();




            $table->unique(['story_id', 'locale']);
            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
