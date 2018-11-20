<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stream;
use App\Matto\PushNotification;
class StreamController extends Controller
{
    public function addStream(Request $request)
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
        $stream->save();

        $push = new PushNotification([
            'heading' => 'New live stream started',
            'body' => 'Hey brethren, a new live stream titled '.$stream->title.' has just been started, do not miss it',
        ],
        $url = route('live'),
        $btns = array(
            array('text' => 'Watch on our site', 'icon' => 'http://winners.starnettechnologies.net/storage/assets/winners-logo.png', 'url' => 'http://winners.starnettechnologies.net/live'),
            array('text' => 'Watch on YouTube', 'icon' => 'http://winners.starnettechnologies.net/storage/assets/youtube-icon.png', 'url' => 'https://youtube.com/watch?v='.$stream->url)
            ));
        $push->send();

        return redirect()->route('live')->with(['success' => 'New stream added']);
    } 

    public function removeStream($id){
        $stream = Stream::find($id);
        $stream->delete();

        return redirect()->route('index')->with(['success' => 'Stream deleted']);

    }
}
