<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role permissions
//        Permission::create(['name' => 'Access Role', 'slug' => 'access-role', 'for' => 'role']);
//        Permission::create(['name' => 'Create Role', 'slug' => 'create-role', 'for' => 'role']);
//        Permission::create(['name' => 'Update Role', 'slug' => 'update-role', 'for' => 'role']);
//        Permission::create(['name' => 'Show Role', 'slug' => 'show-role', 'for' => 'role']);
//        Permission::create(['name' => 'Delete Role', 'slug' => 'delete-role', 'for' => 'role']);

        //Admin permissions
        Permission::create(['name' => 'Access', 'slug' => 'access', 'for' => 'admin']);
        Permission::create(['name' => 'Create', 'slug' => 'create', 'for' => 'admin']);
        Permission::create(['name' => 'Update', 'slug' => 'update', 'for' => 'admin']);
        Permission::create(['name' => 'Show', 'slug' => 'show', 'for' => 'admin']);
        Permission::create(['name' => 'Delete', 'slug' => 'delete', 'for' => 'admin']);
        Permission::create(['name' => 'Status Change', 'slug' => 'status-change', 'for' => 'admin']);
    }
}
