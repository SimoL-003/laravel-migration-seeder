<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->code = strtoupper($faker->bothify('??####'));
            $newTrain->n_of_cars = $faker->numberBetween(5, 15);
            $newTrain->is_delayed = $faker->boolean(25);
            $newTrain->is_cancelled = $faker->boolean(10);

            $newTrain->save();
        }
    }
}
