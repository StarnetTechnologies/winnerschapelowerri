<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Service;

class ViewsController extends Controller
{
    public function home(){
		return view('homepage');
	}
    public function admin(){
		return view('admin');
    }
    public function live(){
      return view('stream.live');
      }
      public function editEvent($id){
        return view('admin.edit-event')->with('event', Event::find($id));
      }
      public function editService($id){
        return view('admin.edit-service')->with('service', Service::find($id));
      }

        }
