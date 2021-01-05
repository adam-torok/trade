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
            'title' =>  $this->faker->sentence(5),
            'description' =>  $this->faker->text,
            'image' => '/uploads/images/advert_images/Bontatlan Xbox One X - 1TB - Limitált Cyberpunk 2077 kiadás_1609242067.jpg',
            'console_type' => $this->faker->randomElement(['Nintendo','Playstation','XBOX']),
            'advert_type' => $this->faker->randomElement(['Elad','Cserel','Keres']),
            'price' => $this->faker->numberBetween(1000,9000),
            'package' => $this->faker->randomElement(['Igen','Nem']),
            'condition' => $this->faker->randomElement(['Uj','Hasznalt']),
        ];
    }
}
