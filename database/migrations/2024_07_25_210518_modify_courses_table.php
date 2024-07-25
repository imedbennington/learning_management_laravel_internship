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
        Schema::table('courses', function (Blueprint $table) {
            $table->string('uploader_type')->nullable()->change(); // Make uploader_type nullable
            $table->unsignedBigInteger('uploader_id')->nullable()->change(); // Make uploader_id nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('uploader_type')->nullable(false)->change(); // Revert uploader_type to not nullable
            $table->unsignedBigInteger('uploader_id')->nullable(false)->change(); // Revert uploader_id to not nullable
        });
    }
};
