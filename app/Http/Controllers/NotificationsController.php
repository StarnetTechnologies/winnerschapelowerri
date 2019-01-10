<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matto\PushNotification;

class NotificationsController extends Controller
{
        
    public function send(Request $request){
            $this->validate($request,[ 
            'heading' => 'required',
            'content' => 'required',
            ]);
        
        
            $notification = new pushNotification([
                'heading' => $request->heading,
                'body' => $request->content
            ]);
            $notification->send();
        
            return redirect()->back();
        
            }
    }
