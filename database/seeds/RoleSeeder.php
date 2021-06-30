<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Role
        Role::create(['name' => 'Super Admin', 'slug' => 'super-admin' ]);
        Role::create(['name' => 'Admin', 'slug' => 'admin']);

        // Others Role
        Role::create(['name' => 'Manager', 'slug' => 'manager']);
        Role::create(['name' => 'Accountant', 'slug' => 'accountant' ]);


        /* Assign role permissions to admin */
        $permissions = Permission::all();

        $roleSuperAdmin = Role::where('slug', 'super-admin')->first();
        $roleAdmin = Role::where('slug', 'admin')->first();
        $permissions->each(function ($permission) use ($roleSuperAdmin, $roleAdmin) {
                $roleSuperAdmin->givePermissionTo($permission);
        });
    }
}
