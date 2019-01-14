<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pastor;
use App\Matto\FileUpload;

class PastorsController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[ 
          'fullname' => 'required',
          'position' => 'required',
        ]);
          if($request->hasFile('display_photo')){
          $upload = new FileUpload($request,
                                    $name='display_photo',
                                    $title=$request->fullname,
                                    $path = 'public/images/pastors'
                                  );            
          }

        
        $pastor = new Pastor();
        $pastor->fullname = $request->fullname;
        $pastor->position = $request->position;
        if(!empty($upload->slugs)){
          $pastor->dp = $upload->slugs[0];
     }
        $pastor->save();

        return redirect()->back()->with('success','<strong>'.$pastor->fullname.'</strong> added successfully');
      }


      public function edit($id){
        return view('pages.admin.edit-pastor')->with('pastor', Pastor::find($id));
      }


    public function update(Request $request,$id){
            $this->validate($request,[ 
              'fullname' => 'required',
              'position' => 'required',
            ]);

            if($request->hasFile('display_photo')){
              $upload = new FileUpload($request,
                                      $name='display_photo',
                                      $title=$request->fullname,
                                      $path = 'public/images/pastors'
                                    );
            }
            $pastor = Pastor::findorfail($id);
            $pastor->fullname = $request->fullname;
            $pastor->position = $request->position;
            $pastor->bio = $request->bio;
            if(!empty($upload->slugs)){
                 $pastor->dp = $upload->slugs[0];
            }
            $pastor->save();
    
            return redirect()->back()->with('success','<strong>'.$pastor->fullname.'</strong> updated successfully');
          }
  
      public function discard($id){
          $pastor = Pastor::findorfail($id);
          $pastor->delete();
          $image = public_path().'/storage/images/pastors/'.$pastor->dp;
          if(file_exists($image)){
            unlink($image);
          }
  
  
          return redirect()->back()->with('success','<strong>'.$pastor->fullname.'</strong> discarded');
      }
}
