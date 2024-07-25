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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->after('email');
            }
            if (!Schema::hasColumn('users', 'user_name')) {
                $table->string('user_name')->after('last_name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'user_name')) {
                $table->dropColumn('user_name');
            }
            if (Schema::hasColumn('users', 'last_name')) {
                $table->dropColumn('last_name');
            }
        });
    }
};

