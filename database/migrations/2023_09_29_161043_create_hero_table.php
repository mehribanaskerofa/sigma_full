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
        Schema::create('heros', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->text('sub_title1')->nullable();
            $table->text('sub_title2')->nullable();
            $table->text('sub_title3')->nullable();
            $table->timestamps();

        });

        Schema::create('hero_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hero_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('description')->nullable();

            $table->string('title1')->nullable();
//            $table->text('sub_title1')->nullable();

            $table->string('title2')->nullable();
//            $table->text('sub_title2')->nullable();

            $table->string('title3')->nullable();
//            $table->text('sub_title3')->nullable();

            $table->unique(['hero_id', 'locale']);
            $table->foreign('hero_id')->references('id')->on('heros')->onDelete('cascade');
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
