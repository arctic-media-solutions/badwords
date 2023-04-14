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
        Schema::create('bad_words', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->foreignId('category_id')->constrained();
            $table->boolean('is_regex')->default(false);
            $table->boolean('is_case_sensitive')->default(false);
            $table->boolean('is_whole_word')->default(false);
            $table->boolean('enabled')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('badwords');
    }
};
