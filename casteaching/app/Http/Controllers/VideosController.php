<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{

    public function show($id)
    {
//return 'Ubuntu 101 | This is a description | December 31, 2020';

        $video = Video::find($id);
//    $video = new stdClass();
//    $video->title='Ubuntu 101';
//    $video->description='This is a test video';
//    $video->published_at='2020-01-01';

        return view('videos.show', [ //CRUD -> RETRIEVE -> nomes un video
            'video' => $video
        ]);
    }
//    public function show($id)
//    {
//        $video = Video::find($id);
//        return view('videos.show', ['video' => $video]);
//    }


}
