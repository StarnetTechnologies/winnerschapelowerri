<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime; 
use App\Event;
use App\Matto\PushNotification;
use App\Matto\FileUpload;

class EventsController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[ 
          'title' => 'required',
          'description' => 'required',
          'location' => 'required',
          'start' => 'required',
          'end' => 'required',
        ]);

    
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->start_at =  $request->start;
        $event->end_at =  $request->end;

        if($request->hasFile('image')){
          $upload = new FileUpload($request,
                                    $name='image',
                                    $title = str_slug(time().'-'.$event->title),
                                    $path = 'public/images/events'
                                  );
          if(!empty($upload->slugs)){
            $event->image = $upload->slugs[0];
          }
        }

        $event->save();
  
        $startDate = $event->startDate()->format('M').' '.$event->startDate()->format('d');
        $startTime = $event->to12Hours($event->startDate());
        $endDate = $event->endDate()->format('M').' '.$event->endDate()->format('d');
        $endTime =  $event->to12Hours($event->endDate());
  
        if($startDate == $endDate){
            $timeFrame = $startDate.', '.$startTime.' to '.$endTime;
          }else{
            $timeFrame = $startDate.', '.$startDate.' to '.$endDate.', '.$endTime;
          }

              
          $push = new PushNotification([
              'heading' => 'New Event: '.$event->title,
              'body' => '['.$timeFrame.' @ '.$event->location.'] - '.$event->description
            ]);

            if($push->isNotifiable($request)){
                $push->send();
            }
  
        return redirect()->back()->with('success','Event <strong>'.$event->title.'</strong> created successfully');
      }

      public function edit($id){
        return view('pages.admin.edit-event')->with('event', Event::find($id));
      }
  
      public function update(Request $request, $id)
      {
        $this->validate($request,[ 
          'title' => 'required',
          'description' => 'required',
          'location' => 'required',
          'start' => 'required',
          'end' => 'required',
        ]);
  
        $event = Event::find($id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->start_at =  $request->start;
        $event->end_at =  $request->end;

        if($request->hasFile('image')){
          $upload = new FileUpload($request,
                                    $name='image',
                                    $title = str_slug(time().'-'.$event->title),
                                    $path = 'public/images/events'
                                  );
          if(!empty($upload->slugs)){
            $event->image = $upload->slugs[0];
          }
        }
        
        $event->save();
  
        $startDate = $event->startDate()->format('M').' '.$event->startDate()->format('d');
        $startTime = $event->to12Hours($event->startDate());
        $endDate = $event->endDate()->format('M').' '.$event->endDate()->format('d');
        $endTime =  $event->to12Hours($event->endDate());
  
        if($startDate == $endDate){
            $timeFrame = $startDate.', '.$startTime.' to '.$endTime;
          }else{
            $timeFrame = $startDate.', '.$startDate.' to '.$endDate.', '.$endTime;
          }

        $push = new PushNotification([
        'heading' => 'The event '.$event->title.' updated!',
        'body' => '['.$timeFrame.' @ '.$event->location.'] - '.$event->description
        ]);

        if($push->isNotifiable($request)){
                $push->send();
          }
  
        return redirect()->back()->with('success','Event <strong>'.$event->title.'</strong> updated successfully');
  
      }
  
      public function discard($id){
        $event = Event::find($id);
        $event->delete();
  
        return redirect()->back()->with('success', 'Event <strong>'.$event->title.'</strong> removed successfully');
    }
  
  }
