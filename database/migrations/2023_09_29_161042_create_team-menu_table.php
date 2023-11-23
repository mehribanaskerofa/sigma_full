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
        Schema::create('team_menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

        });
        Schema::create('team_menu_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_menu_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();

            $table->unique(['team_menu_id', 'locale']);
            $table->foreign('team_menu_id')->references('id')->on('team_menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
