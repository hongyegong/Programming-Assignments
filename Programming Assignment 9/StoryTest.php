<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->visit('/api/stories');

        $arr = json_decode(json_encode($response));
        $result = true;
        foreach($arr as $item)
        {
            if(strlen($item['title']) == 0) $result = false;
        }

        $this->assertEquals(true, $result);
    }
}
