<?php

namespace Tests\Feature;

use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoTest extends TestCase
{
    /**
     * @test
     */
    public function users_can_view_videos(): void
    {

        $video=Video::create([
            'title' => 'Test Video',
            'description' => 'This is a test video',
            'url' => 'https://www.youtube.com/watch?v=9bZkp7q19f0',
            'published_at' => Carbon::parse('2020-01-01'),
            'previous' => null,
            'next' => null,
            'series_id' => 1,

        ]);

        $video2=Video::create([
            'title' => 'Test Video',
            'description' => 'This is a test video',
            'url' => 'https://www.youtube.com/watch?v=9bZkp7q19f0',
            'published_at' => Carbon::parse('2020-01-01'),
            'previous' => null,
            'next' => null,
            'series_id' => 1,

        ]);
        //FASE 2
        $response = $this->get('/videos/' .$video2->id);


        $response->assertStatus(200);
        $response->assertSee('Ubuntu 101');
        $response->assertSee('This is a test video');
        $response->assertSee('2020-01-01');
    }
}
