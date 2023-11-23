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
        Schema::create('devs', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->timestamps();


            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
        });

        Schema::create('dev_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dev_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title')->nullable();
            $table->text('description1')->nullable();
            $table->text('description2')->nullable();

            $table->unique(['dev_id', 'locale']);
            $table->foreign('dev_id')->references('id')->on('devs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devs');
    }
};
