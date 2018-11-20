<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Event;
use App\Service;
use App\Prophetic;
use App\Matto\PushNotification;
use DateTime; 

class WinnersController extends Controller
{

  public function sendPushNotification(Request $request){
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

  public function newPW(Request $request){
    $this->validate($request,[ 
      'word' => 'required',
      'bible_verse' => 'required',
    ]);

    $now = new DateTime();

    $pw = new Prophetic();
    $pw->word = $request->word;
    $pw->bible_verse = $request->bible_verse;
    $pw->note = $request->note;
    $pw->month = $now->format('F');
    $pw->year = $now->format('Y');
    $pw->save();

      
    $push = new PushNotification([
      'heading' => $pw->month.', '.$pw->year.' Prophetic Word',
      'body' => $pw->word.' - '.$pw->bible_verse
    ]);
    $push->send();

    return redirect()->back()->with('success',$pw->month.', '.$pw->year.' Prophetic Word published!');
  }

  public function updatePW(Request $request,$id){
    $this->validate($request,[ 
      'word' => 'required',
      'bible_verse' => 'required',
    ]);

    $pw = Prophetic::find($id);
    $pw->word = $request->word;
    $pw->bible_verse = $request->bible_verse;
    $pw->note = $request->note;
    $pw->save();

      
    $push = new PushNotification([
      'heading' => $pw->month.', '.$pw->year.' updated',
      'body' => $pw->word.' - '.$pw->bible_verse
    ]);
    $push->send();

    return redirect()->back()->with('success',$pw->month.', '.$pw->year.' Prophetic Word updated!');
  }

    public function addEvent(Request $request){
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
      $push->send();

      return redirect()->back()->with('success','Event <strong>'.$event->title.'</strong> created successfully');
    }

    public function updateEvent(Request $request, $id)
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
      $push->send();

      return redirect()->back()->with('success','Event <strong>'.$event->title.'</strong> updated successfully');

    }

    public function removeEvent($id){
      $event = Event::find($id);
      $event->delete();

      return redirect()->back()->with('success', 'Event <strong>'.$event->title.'</strong> removed successfully');
  }


    public function addService(Request $request){
      $this->validate($request,[ 
        'title' => 'required',
        'location' => 'required',
        'day' => 'required',
        'start' => 'required',
        'end' => 'required',
      ]);
  
      
      $service = new Service();
      $service->title = $request->title;
      $service->location = $request->location;
      $service->day = $request->day;
      $service->start =  $request->start;
      $service->end =  $request->end;
      $service->note =  $request->note;
      $service->save();

      $push = new PushNotification([
        'heading' => 'Service Alert: '.$service->title,
        'body' => $service->title.' will be holding every '.$service->day.' at '.$service->location.' Time: '.$service->normalTime($service->start).' to '.$service->normalTime($service->end)
      ]);
      $push->send();
      
      return redirect()->back()->with('success','Service <strong>'.$service->title.'</strong> added successfully');
    }

    public function updateService(Request $request,$id){
      $this->validate($request,[ 
        'title' => 'required',
        'location' => 'required',
        'day' => 'required',
        'start' => 'required',
        'end' => 'required',
      ]);

      $service = Service::find($id);
      $service->title = $request->title;
      $service->location = $request->location;
      $service->day = $request->day;
      $service->start =  $request->start;
      $service->end =  $request->end;
      $service->note =  $request->note;
      $service->save();

      $push = new PushNotification([
        'heading' => $service->title.' has been updated',
        'body' => $service->title.' now holds every '.$service->day.' at '.$service->location.' Time: '.$service->normalTime($service->start).' to '.$service->normalTime($service->end)
      ]);
      $push->send();
      
      return redirect()->back()->with('success','Service <strong>'.$service->title.'</strong> added successfully');
    }

    public function removeService($id){
        $service = Service::find($id);
        $service->delete();

        return redirect()->back()->with('success','Service <strong>'.$service->title.'</strong> removed successfully');
    }

  public function changePassword(Request $request){
		$this->validate($request,[ 
		'password' => 'required|string|min:6|confirmed']);
		
		$user = User::find(Auth::id());
		$user->password = bcrypt($request->password);
		
		return redirect()->back()->with('success','Password changed!');
	}
	
}
