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
        Schema::create('slide_indexs', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();

        });

        Schema::create('slide_index_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('slide_index_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->unique(['slide_index_id', 'locale']);
            $table->foreign('slide_index_id')->references('id')->on('slide_indexs')->onDelete('cascade');
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
