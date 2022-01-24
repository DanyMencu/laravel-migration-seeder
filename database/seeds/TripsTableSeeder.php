<?php

use Illuminate\Database\Seeder;
use App\Trip;

use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i ++) {
            $new_trip = new Trip;
    
            $new_trip->title = $faker->sentence(3);
            $new_trip->city_destination = $faker->sentence(2);
            $new_trip->state = $faker->sentence(2);
            $new_trip->price = $faker->numberBetween(100, 5000);
            $new_trip->date_departure = $faker->dateTimeThisDecade('+5 years');
            $new_trip->duration = $faker->numberBetween(5, 21);
            $new_trip->description = $faker->paragraphs(rand(2,4), true);
            $new_trip->minimum_partecipants = $faker->numberBetween(1, 10);
    
            $new_trip->save();
        }
    }
}
