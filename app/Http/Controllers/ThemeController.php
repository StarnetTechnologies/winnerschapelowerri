<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Theme;
use App\Matto\PushNotification;
use App\Matto\FileUpload;

class ThemeController extends Controller
{
    public function create(Request $request){

        $this->validate($request,[ 
          'theme' => 'required',
          'bible_verse' => 'required',
        ]);
    
        $now = new DateTime();
    
        $theme = new Theme();
        $theme->theme = $request->theme;
        $theme->bible_verse = $request->bible_verse;
        $theme->note = $request->note;
        $theme->month = $now->format('F');
        $theme->year = $now->format('Y');

        if($request->hasFile('image')){
            $upload = new FileUpload($request,
                                      $name='image',
                                      $title = str_slug(time().'-'.$theme->month.'-'.$theme->year.'-'.$theme->theme),
                                      $path = 'public/images/themes'
                                    );
            if(!empty($upload->slugs)){
              $theme->image = $upload->slugs[0];
            }
          }

        $theme->save();
    
        $push = new PushNotification([
            'heading' => $theme->month.', '.$theme->year.' Theme',
            'body' => $theme->theme.' - '.$theme->bible_verse
        ]);
        
        if($push->isNotifiable($request)){
            $push->send();      
        }
    
        return redirect()->back()->with('success',$theme->month.', '.$theme->year.' Theme published!');
      }
    
      public function update(Request $request,$id){
        $this->validate($request,[ 
          'theme' => 'required',
          'bible_verse' => 'required',
        ]);
    
        $theme = Theme::findorfail($id);
        $theme->theme = $request->theme;
        $theme->bible_verse = $request->bible_verse;
        $theme->note = $request->note;

        if($request->hasFile('image')){
            $upload = new FileUpload($request,
                                      $name='image',
                                      $title = str_slug(time().'-'.$theme->month.'-'.$theme->year.'-'.$theme->theme),
                                      $path = 'public/images/themes'
                                    );
            if(!empty($upload->slugs)){
              $theme->image = $upload->slugs[0];
            }
          }
          
          $theme->save();
    
            $push = new PushNotification([
                        'heading' => $theme->month.', '.$theme->year.' updated',
                        'body' => $theme->theme.' - '.$theme->bible_verse
                    ]);

            if($push->isNotifiable($request)){
                $push->send();
            }
    
        return redirect()->back()->with('success',$theme->month.', '.$theme->year.' Theme updated!');
      }
    }
