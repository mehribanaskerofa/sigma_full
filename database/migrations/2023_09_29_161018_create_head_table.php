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
        Schema::create('heads', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->timestamps();


            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
        });

        Schema::create('head_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('head_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('description')->nullable();

            $table->unique(['head_id', 'locale']);
            $table->foreign('head_id')->references('id')->on('heads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('head');
    }
};
