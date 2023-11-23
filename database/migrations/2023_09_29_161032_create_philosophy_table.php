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
        Schema::create('philosophys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
        });

        Schema::create('philosophy_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('philosophy_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title1')->nullable();
            $table->text('description1')->nullable();

            $table->string('title2')->nullable();
            $table->text('description2')->nullable();

            $table->string('title3')->nullable();
            $table->text('description3')->nullable();

            $table->unique(['philosophy_id', 'locale']);
            $table->foreign('philosophy_id')->references('id')->on('philosophys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('philosophys');
    }
};
