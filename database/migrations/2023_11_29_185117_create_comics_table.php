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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alternative');
            $table->enum('status', ['ongoing', 'completed', 'hiatus']);
            $table->enum('type', ['Manga', 'Manhwa', 'Manhua']);
            $table->text('description');
            $table->string('author');
            $table->string('artist');
            $table->double('rating');
            $table->string('thumb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
