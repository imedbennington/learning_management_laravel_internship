<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Database\Seeders\RolesAndPermissionsSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call additional seeders
        $this->call([
            RolesAndPermissionsSeeder::class,
        ]);
    }
}