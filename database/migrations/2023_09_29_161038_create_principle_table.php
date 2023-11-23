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
        Schema::create('principles', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->timestamps();


            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
        });

        Schema::create('principle_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('principle_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();
            $table->text('description')->nullable();

            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();


            $table->unique(['principle_id', 'locale']);
            $table->foreign('principle_id')->references('id')->on('principles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principles');
    }
};
