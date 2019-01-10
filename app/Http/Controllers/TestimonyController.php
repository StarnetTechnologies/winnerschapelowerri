<?php

namespace App\Http\Controllers;
use App\Testimony;

use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    
    public function store(Request $request){
        $this->validate($request,[ 
            'name' => 'required',
            'email' => 'required|email',
            'testimony' => 'required'
          ]);
          Testimony::create([
              'name' => $request->name,
              'email' => $request->email,
              'title' => $request->title,
              'testimony' => $request->testimony
          ]);

          return redirect()->back()->with('success','Your testimony has been submitted and will be published after approval');
      }

    public function approveTestimony($id){
        $testimony = Testimony::findorfail($id);
        $testimony->approval = 1;
        $testimony->save();
    }

    public function approve($id){
        if(is_array($id)){
            $count = 0;
            foreach($id as $i){
                $this->approveTestimony($i);
                $count ++;
                }
                return ['success' =>  $count.' testimonies approved'];
            }
    }

    public function disapproveTestimony($id){
        $testimony = Testimony::findorfail($id);
        $testimony->approval = 0;
        $testimony->save();
    }

    public function disapprove($id){
        if(is_array($id)){
            $count = 0;
            foreach($id as $i){
                $this->disapproveTestimony($i);
                $count ++;
                }
                return ['success' =>  $count.' testimonies disapproved'];
            }
    }


    public function discardTestimony($id){
        $testimony = Testimony::findorfail($id);
        $testimony->delete();
    }

    public function discard($id){
        if(is_array($id)){
            $count = 0;
            foreach($id as $i){
                $this->discardTestimony($i);
                $count ++;
                }
               return ['success' =>  $count.' testimonies discarded'];
            }
    }

    public function action(Request $request){
        $this->validate($request,[
            'action' => 'required'
        ]);

        if(count($request->id) == 0){
            return redirect()->back()->with('error','No testimony selected');
        }
        switch($request->action){
            case 'approve':
                return redirect()->back()->with($this->approve($request->id));
            break;
            case 'disapprove':
                return redirect()->back()->with($this->disapprove($request->id));
            break;
            case 'discard':
                return redirect()->back()->with($this->discard($request->id));
            break;
        }
    }
}
