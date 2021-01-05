<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertSeeder extends Seeder
{
  public function run()
    {
        \App\Models\Advert::factory(15)->create();
    }
}
