<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stream;
use App\Matto\PushNotification;

class StreamsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,
            ['url' => 'required',
            'title' => 'required',
            'description' => 'required' ]
        );
        $stream = new Stream();
        $stream->url = $request->url;
        $stream->title = $request->title;
        $stream->description = $request->description;
        $stream->slug = str_slug($request->title);
        $stream->save();

        $push = new PushNotification([
            'heading' => 'New live stream started',
            'body' => 'Brethren, a new live stream titled '.$stream->title.' has just been started, do not miss it',
        ],
        $url = route('live'),
        $btns = array(
            array('text' => 'Watch on our site', 'icon' => 'http://winners.starnettechnologies.net/storage/assets/winners-logo.png', 'url' => 'http://winners.starnettechnologies.net/live'),
            array('text' => 'Watch on YouTube', 'icon' => 'http://winners.starnettechnologies.net/storage/assets/youtube-icon.png', 'url' => 'https://youtube.com/watch?v='.$stream->url)
            ));

            if($push->isNotifiable($request)){
                $push->send();
            }

        return redirect()->route('live')->with(['success' => 'New stream added']);
    } 

    public function edit($id){
        return view('pages.admin.edit-stream')->with('stream',Stream::find($id));
    }
    public function update(Request $request,$id){
        $this->validate($request,
            ['url' => 'required',
            'title' => 'required',
            'description' => 'required' ]
        );

        $stream = Stream::find($id);
        $stream->title = $request->title;
        $stream->url = $request->url;
        $stream->description = $request->description;
        $stream->save();

        return redirect()->back()->with('success','<strong>'.$stream->title.'</strong> stream updated');
    }

    public function discard($id){
        $stream = Stream::find($id);
        $stream->delete();

        return redirect()->route('index')->with(['success' => 'Stream <strong>'.$stream->title.'deleted']);

    }
}
