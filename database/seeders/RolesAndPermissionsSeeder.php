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
        //create roles
        $roleStudent = Role::create(['name' => 'student']);
        $roleInstructor = Role::create(['name' => 'instructor']);
        $roleAdmin = Role::create(['name' => 'admin']);

        // create permissions
        $permissionManageUsers = Permission::create(['name' => 'manage users']);
        $permissionManageCourses = Permission::create(['name' => 'manage courses']);

        // giving permissions
        $roleAdmin->givePermissionTo([$permissionManageUsers, $permissionManageCourses]);
        $roleInstructor->givePermissionTo($permissionManageCourses);
    }
}
