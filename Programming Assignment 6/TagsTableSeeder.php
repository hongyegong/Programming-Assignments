<?php

use Illuminate\Database\Seeder;
use App\Story;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        $limit = 10;
        
        for($i = 1; $i <= $limit; $i++) {
    		DB::table('tags')->insert([ //,
				'value' => $faker->city.', '.$faker->stateAbbr,
    		]);
            $stories = Story::all();
            foreach ($stories as $story) {
                DB::table('story_tag')->insert([ //,
                    'story_id' => $story->id,
                    'tag_id' => $i,
                ]);
            }
        }
    }
}
