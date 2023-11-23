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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
        });

        Schema::create('banner_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banner_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title1')->nullable();
            $table->string('text1')->nullable();
            $table->string('sub_title1')->nullable();
            $table->text('description1')->nullable();

            $table->string('title2')->nullable();
            $table->string('text2')->nullable();
            $table->string('sub_title2')->nullable();
            $table->text('description2')->nullable();

            $table->string('title3')->nullable();
            $table->string('text3')->nullable();
            $table->string('sub_title3')->nullable();
            $table->text('description3')->nullable();
            $table->unique(['banner_id', 'locale']);
            $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
