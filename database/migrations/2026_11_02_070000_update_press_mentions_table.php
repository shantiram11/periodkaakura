<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('press_mentions', function (Blueprint $table) {
            $table->renameColumn('logo', 'image');
            $table->unsignedInteger('sort')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('press_mentions', function (Blueprint $table) {
            $table->renameColumn('image', 'logo');
            $table->dropColumn('sort');
        });
    }
};
