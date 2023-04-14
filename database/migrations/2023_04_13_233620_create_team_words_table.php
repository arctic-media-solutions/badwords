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
        Schema::create('team_words', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained();
            $table->string('word');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('is_approved')->default(true);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_words');
    }
};
