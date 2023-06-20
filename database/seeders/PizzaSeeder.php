<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;
use Faker\Generator as Faker;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 11; $i++){
            $newPizza = new Pizza();
            $newPizza->Name =$faker->word(5);
            $newPizza->Description = $faker->sentence(5);
            $newPizza->Price = $faker->randomFloat(2,5,7);  
            $newPizza->save();
        }
    }
}
