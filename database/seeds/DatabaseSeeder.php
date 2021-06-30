<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         $this->call(PermissionSeeder::class);
         $this->call(RoleSeeder::class);

         $user = \App\User::create([
             'name'=>'Rabbi',
             'email'=>'rabbi@g.com',
             'password'=> \Illuminate\Support\Facades\Hash::make('12345678')
         ]);

         $user->role()->attach(1);
    }
}
