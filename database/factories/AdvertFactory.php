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
            'user_id' => $this->faker->numberBetween(1,15),
            'title' =>  $this->faker->sentence(5),
            'description' =>  $this->faker->text,
            'image' => '/uploads/images/advert_images/Bontatlan Xbox One X - 1TB - Limitált Cyberpunk 2077 kiadás_1609242067.jpg',
            'console_type' => $this->faker->randomElement(['Nintendo','Playstation','XBOX']),
            'advert_type' => $this->faker->randomElement(['Elad','Cserel','Keres']),
            'price' => $this->faker->numberBetween(1000,9000),
            'package' => $this->faker->randomElement(['Igen','Nem']),
            'county' => $this->faker->randomElement(['Baranya','Békés','Fejér','Heves','Nógrád','Pest','Veszprém','Zala','Győr-Moson-Sopron','Hajdú-Bihar']),
            'city' => $this->faker->randomElement(['Szeged','Szentes','Pecs','Mako','Bekes','Gyor']),
            'shelfed' => $this->faker->randomElement([0,1]),
            'condition' => $this->faker->randomElement(['Uj','Hasznalt']),
        ];
    }
}
