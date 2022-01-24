<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_trip = new Trip;

        $new_trip->title = $faker->sentence(3);
        $new_trip->city_destination = $faker->word();
        $new_trip->state = $faker->sentence(2);
        $new_trip->price = $faker->randomDigitNotNull(100, 5000);
        $new_trip->date_departure = $faker->dateTimeThisDecade('+3 years');
        $new_trip->date_return = $faker->dateTimeBetween('-0 days', '+1 week');
        $new_trip->description = $faker->paragraphs(rand(2,4));
        $new_trip->minimum_partecipants = $faker->randomDigitNotNull(1, 10);

        $new_trip->save();
    }
}
