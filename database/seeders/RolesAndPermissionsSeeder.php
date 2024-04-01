<?php

namespace Database\Seeders;

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

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'create bill', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'list bill', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'update bill', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'delete bill', 'guard_name' => 'backpack']);

        Permission::create(['name' => 'create product', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'list product', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'update product', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'delete product', 'guard_name' => 'backpack']);

        Permission::create(['name' => 'create sales', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'list sales', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'update sales', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'delete sales', 'guard_name' => 'backpack']);
        Permission::create(['name' => 'list dashboard', 'guard_name' => 'backpack']);

        $rolesuper = Role::create(['name' => 'superadmin', 'guard_name' => 'backpack']);

        $rolesuper->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'admin', 'guard_name' => 'backpack']);

        $role->givePermissionTo('create bill');

    }
}
