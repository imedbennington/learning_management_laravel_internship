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
            // Add columns if they do not exist
            if (!Schema::hasColumn('courses', 'uploader_first_name')) {
                $table->string('uploader_first_name')->nullable();
            }
            if (!Schema::hasColumn('courses', 'uploader_last_name')) {
                $table->string('uploader_last_name')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            if (Schema::hasColumn('courses', 'uploader_first_name')) {
                $table->dropColumn('uploader_first_name');
            }
            if (Schema::hasColumn('courses', 'uploader_last_name')) {
                $table->dropColumn('uploader_last_name');
            }
        });
    }
};
