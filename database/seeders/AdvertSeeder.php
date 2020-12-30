<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adverts')->insert([
            'user_id' => 1,
            'title' => Str::random(10),
            'description' => Str::random(100),
            'image' => '/uploads/images/advert_images/Bontatlan Xbox One X - 1TB - Limitált Cyberpunk 2077 kiadás_1609242067.jpg',
            'console_type' => 'XBOX',
            'advert_type' => 'Elad',
            'price' => 999,
            'package' => 'Igen',
            'condition' => 'Uj',
        ]);
    }
}
