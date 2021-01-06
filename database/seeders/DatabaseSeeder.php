<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Advert::factory(100)->create();
        \App\Models\User::factory(50)->create();
    }
}
