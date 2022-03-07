<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<30; $i++){
            $newTravel = new Travel();
            $newTravel->city = "$faker->cityPrefix";
            $newTravel->country = "$faker->country";
            $newTravel->travellers = rand(0,4);
            $newTravel->departure = "22-01-2022";
            $newTravel->return = "22-01-2022";
            $newTravel->save();
        }
    }
}
