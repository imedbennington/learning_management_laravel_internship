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
        Schema::table('instructor', function (Blueprint $table) {
            // Check if the 'id' column does not exist and add it if necessary
            if (!Schema::hasColumn('instructor', 'id')) {
                $table->bigIncrements('id')->unsigned();
            }
            
            // Drop the existing primary key if it is set on `user_id`
            $table->dropPrimary(['user_id']);
            
            // Drop the unique constraint if it exists on `user_id`
            $table->dropUnique(['user_id']);
    
            // Ensure `id` column is set as auto-increment and as the primary key
            $table->bigInteger('id')->unsigned()->primary()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('instructor', function (Blueprint $table) {
            // Revert changes if needed
            $table->dropPrimary(['id']);
            
            // Restore `user_id` as the primary key
            // Ensure the `user_id` column is set correctly
            $table->integer('user_id')->primary()->unique();
        });
    }
};


