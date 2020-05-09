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
         $this->call(DivisionTableSeeder::class);
         $this->call(DistrictTableSeeder::class);
         $this->call(UpazilaTableSeeder::class);
         $this->call(AreaTypeTableSeeder::class);
         $this->call(AreaTableSeeder::class);
         $this->call(CodeListTableSeeder::class);
         $this->call(ListItemTableSeeder::class);
    }
}
