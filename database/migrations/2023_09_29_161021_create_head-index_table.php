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
        Schema::create('head_indexs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('head_index_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('head_index_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();

            $table->string('title')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();

            $table->unique(['head_index_id', 'locale']);
            $table->foreign('head_index_id')->references('id')->on('head_indexs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('head_index');
    }
};
