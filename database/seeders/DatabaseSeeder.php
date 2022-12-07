<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\Island::factory(1)->create();
         \App\Models\Address::factory(5)->create();
         \App\Models\Patient::factory(10)->create();
    }
}
