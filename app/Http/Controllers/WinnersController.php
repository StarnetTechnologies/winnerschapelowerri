<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Stream;
use App\Contact;
use App\Testimony;
use App\Preference;
use App\Announcement;
use App\Matto\FileUpload;

use App\Matto\PushNotification;
use DateTime; 

class WinnersController extends Controller
{
    public function home(){
		  return view('pages.home');
	  }
    public function admin(){
      return view('pages.admin')
                    ->with('pref',Preference::all()->first())
                    ->with('posts',Post::paginate(10))
                    ->with('announcements',Announcement::all());
    }

    public function live($slug = ''){
      if($slug === ''){
        $stream = Stream::OrderBy('created_at','desc')->take(1)->get();
        if($stream->count() == 1){
          $otherStreams = Stream::where('slug','!=',$stream->first()->slug)->OrderBy('created_at','desc')->get();
        }else{
          $otherStreams = Stream::OrderBy('created_at','desc')->get();
        }
      }
      else{
        $stream = Stream::where('slug',$slug)->get();

        if($stream->count() == 1){
            $otherStreams = Stream::where('slug','!=',$stream->first()->slug)->OrderBy('created_at','desc')->get();
          }else{
            $otherStreams = Stream::OrderBy('created_at','desc')->get();
          }
        }
      return view('pages.live')->with('stream',$stream)
                                ->with('otherStreams',$otherStreams);
    }
    public function pastors(){
      return view('pages.pastors');
    }
    public function posts(){
      return view('pages.posts')->with('posts',Post::OrderBy('created_at','desc')->paginate(10));
    }
    public function events(){
      return view('pages.events');
    }
    
    public function announcements(){
      return view('pages.announcements')->with('announcements',Announcement::OrderBy('created_at','desc')->paginate(10));
    }

    public function ministries(){
      return view('pages.ministries');
    }

    public function pof(){
      return view('pages.pof');
    }

    public function gallery(){
      return view('pages.gallery');
    }

    public function testimonies(){
      return view('pages.testimonies')->with('testimonies',Testimony::where('approval',1)->orderby('created_at','desc')->paginate(5));
    }


    public function singlePost($slug){
      $post = Post::where('slug',$slug)->firstorfail();
      $otherPosts = Post::where('slug','!=', $slug)->OrderBy('created_at','desc')->get();

      return view('templates.single-post')->with('post',$post)
                                          ->with('otherPosts',$otherPosts);
    }

  public function changePassword(Request $request){
		$this->validate($request,[ 
		'password' => 'required|string|min:6|confirmed']);
		
		$user = User::find(Auth::id());
		$user->password = bcrypt($request->password);
		
		return redirect()->back()->with('success','Password changed');
  }
  
  public function updateContacts(Request $request){
    $contact = Contact::find(1);
    $contact->address = $request->address;
    $contact->phone1 = $request->phone1;
    $contact->phone2 = $request->phone2;
    $contact->email = $request->email;
    $contact->facebook = $request->facebook;
    $contact->instagram = $request->instagram;
    $contact->twitter = $request->twitter;
    $contact->youtube = $request->youtube;
    $contact->save();

		return redirect()->back()->with('success','Contacts updated');
  }

  public function updatePreferences(Request $request){
    $pref = Preference::find(1);
    $pref->welcome_address = $request->welcome_address;
    $pref->pastor_id = $request->pastor;
    
    if($request->hasFile('front_image')){
      $upload = new FileUpload($request,
                                $name='front_image',
                                $title = str_slug(time().'-'.$pref->pastor->fullname),
                                $path = 'public/images/assets'
                              );
      if(!empty($upload->slugs)){
        $pref->front_image = $upload->slugs[0];
      }
    }

    $pref->save();

    return redirect()->back()->with('success', 'saved!');

  }
	
}
