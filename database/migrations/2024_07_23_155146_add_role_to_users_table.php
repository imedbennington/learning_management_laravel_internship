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
        Schema::table('roles', function (Blueprint $table) {
            if (!Schema::hasColumn('roles', 'id')) {
                $table->id();
            }
            if (!Schema::hasColumn('roles', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('roles', 'created_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roles', function (Blueprint $table) {
            if (Schema::hasColumn('roles', 'id')) {
                $table->dropColumn('id');
            }
            if (Schema::hasColumn('roles', 'name')) {
                $table->dropColumn('name');
            }
            if (Schema::hasColumn('roles', 'created_at')) {
                $table->dropTimestamps();
            }
        });
    }
};
