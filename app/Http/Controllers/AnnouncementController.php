<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Matto\PushNotification;

class AnnouncementController extends Controller
{
    public function announce(Request $request){
        $this->validate($request,
        ['subject' => 'required',
        'message' => 'required',
        ] );

        Announcement::create([
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        $push = new PushNotification([
            'heading' => 'Announcement: '.$request->subject,
            'body' => str_limit($request->message, 200)
            ]);
    
            if($push->isNotifiable($request)){
                    $push->send();
              }
      
            return redirect()->back()->with('success','<strong>'.$request->subject.'</strong> announced!');
          }

            
      public function discard($id){
        $a = Announcement::find($id);
        $a->delete();
        return redirect()->back()->with('success', 'Announcement <strong>'.$a->subject.'</strong> discarded');
    }
}
