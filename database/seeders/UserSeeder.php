<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // super user
            array('name' => 'System Admin', 'email' => 'super_admin@gmail.com', 'password' => Hash::make('Admin@1234')),

            // admin user
            array('name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('123456')),

        ]);

$permissions = Permission::all();
$super_admin_role = Role::find(1);
$admin_role = Role::find(2);


$super_admin_role->givePermissionTo($permissions);
$admin_role->givePermissionTo($permissions);


$user = User::findOrFail(1);
$user_admin = User::findOrFail(2);

$user->assignRoleCustom("superadmin", $user->id);
$user->assignRoleCustom("admin", $user_admin->id);



    }
}
