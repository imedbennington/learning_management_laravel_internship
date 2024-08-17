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
        $role = \Spatie\Permission\Models\Role::where('name', 'instructor')->where('guard_name', 'web')->first();
    if ($role) {
        $role->delete();
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \Spatie\Permission\Models\Role::create([
            'name' => 'instructor',
            'guard_name' => 'web'
        ]);
    }
};
