<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('guid')->unique();
            $table->unsignedInteger('number')->nullable()->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();
            $table->longText('transcript')->nullable();
            $table->string('audio_url', 1024)->nullable();
            $table->unsignedInteger('duration')->nullable();
            $table->string('image_url', 1024)->nullable();
            $table->string('spotify_url', 1024)->nullable();
            $table->string('youtube_id')->nullable();
            $table->json('topics')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
