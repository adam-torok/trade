<?php

namespace Database\Factories;

use App\Models\Advert;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdvertFactory extends Factory
{

    protected $model = Advert::class;

    public function definition()
    {
        return [
            'user_id' => 1,
            'title' =>  $this->faker->name,
            'description' =>  $this->faker->name,
            'image' => '/uploads/images/advert_images/Bontatlan Xbox One X - 1TB - Limitált Cyberpunk 2077 kiadás_1609242067.jpg',
            'console_type' => 'Nintendo',
            'advert_type' => 'Elad',
            'price' => 234,
            'package' => 'Nem',
            'condition' => 'Hasznalt',
        ];
    }
}
