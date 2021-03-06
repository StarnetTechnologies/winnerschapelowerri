<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Service;
use App\Matto\PushNotification;

class ServicesController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[ 
          'title' => 'required',
          'day' => 'required',
          'start' => 'required',
          'end' => 'required',
        ]);
    
        
        $service = new Service();
        $service->title = $request->title;
        $service->day = $request->day;
        $service->start =  $request->start;
        $service->end =  $request->end;
        $service->note =  $request->note;
        $service->save();

        $push = new PushNotification([
                    'heading' => 'Service Alert: '.$service->title,
                    'body' => $service->title.' will be holding every '.$service->day.' Time: '.$service->normalTime($service->start).' to '.$service->normalTime($service->end)
                ]);

        if($push->isNotifiable($request)){
            $push->send();
        }
        
        return redirect()->back()->with('success','Service <strong>'.$service->title.'</strong> added successfully');
      }


      public function edit($id){
        return view('pages.admin.edit-service')->with('service', Service::findorfail($id));
      }


    public function update(Request $request,$id){
        $this->validate($request,[ 
          'title' => 'required',
          'day' => 'required',
          'start' => 'required',
          'end' => 'required',
        ]);
  
        $service = Service::findorfail($id);
        $service->title = $request->title;
        $service->day = $request->day;
        $service->start =  $request->start;
        $service->end =  $request->end;
        $service->note =  $request->note;
        $service->save();

        $push = new PushNotification([
        'heading' => $service->title.' has been updated',
        'body' => $service->title.' now holds every '.$service->day.' Time: '.$service->normalTime($service->start).' to '.$service->normalTime($service->end)
        ]);  

        if($push->isNotifiable($request)){
            $push->send();
          }
        
        return redirect()->back()->with('success','Service <strong>'.$service->title.'</strong> added successfully');
      }
  
      public function discard($id){
          $service = Service::findorfail($id);
          $service->delete();
  
          return redirect()->back()->with('success','Service <strong>'.$service->title.'</strong> discarded');
      }
  }
