<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // range of locaiton id is 1 - 10
        $limit = 10;

        for($i = 1; $i <= $limit; $i++) {
            for($j = 3; $j >= 0; $j--) {
                DB::table('stories')->insert([ //,
                    'location_id' => $i,
                    'title' => $faker->realText($faker->numberBetween(10,20)),
                    'story' => $faker->realText($faker->numberBetween(10,50)),
                    'published' => $faker->boolean(25),
                ]);
            }
        }
    }
}
