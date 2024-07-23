<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles using firstOrCreate to avoid duplicates
        $roleStudent = Role::firstOrCreate(['name' => 'student'], ['guard_name' => 'web']);
        $roleInstructor = Role::firstOrCreate(['name' => 'instructor'], ['guard_name' => 'web']);
        $roleAdmin = Role::firstOrCreate(['name' => 'admin'], ['guard_name' => 'web']);

        // Create permissions
        $permissionManageUsers = Permission::firstOrCreate(['name' => 'manage users'], ['guard_name' => 'web']);
        $permissionManageCourses = Permission::firstOrCreate(['name' => 'manage courses'], ['guard_name' => 'web']);

        // Give permissions to roles
        $roleAdmin->givePermissionTo([$permissionManageUsers, $permissionManageCourses]);
        $roleInstructor->givePermissionTo($permissionManageCourses);
    }
}
