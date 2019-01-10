<?php

namespace App\Http\Controllers;
use App\Post;
use App\Matto\FileUpload;
use App\Matto\PushNotification;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[ 
          'title' => 'required',
          'body' => 'required',
        ]);


        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = str_slug($request->title);
        if($request->hasFile('featured_image')){
            $upload = new FileUpload($request,
                                      $name='featured_image',
                                      $title = str_slug(time().'-'.$post->slug),
                                      $path = 'public/images/posts'
                                    );
            if(!empty($upload->slugs)){
              $post->image = $upload->slugs[0];
            }
          }
          $post->save();

          $push = new PushNotification([
            'heading' => $post->title,
            'body' => $post->body
          ]);

          if($push->isNotifiable($request)){
              $push->send();
          }

      return redirect()->back()->with('success','Post <strong>'.$post->title.'</strong> published');
  }

  public function edit($id){
    return view('pages.admin.edit-post')->with('post', Post::find($id));
  }

      public function update(Request $request, $id)
      {
        $this->validate($request,[ 
          'title' => 'required',
          'body' => 'required',
        ]);
    
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;

        if($request->hasFile('featured_image')){
            $upload = new FileUpload($request,
                                      $name='featured_image',
                                      $title = str_slug(time().'-'.$post->slug),
                                      $path = 'public/images/posts'
                                    );
            if(!empty($upload->slugs)){
              $post->image = $upload->slugs[0];
            }
          }
          
        $post->save();

        return redirect()->back()->with('success','Post <strong>'.$post->title.'</strong> updated');

    }

    public function discard($id){
        $post = Post::find($id);
        $post->delete();
  
        return redirect()->back()->with('success', 'Post <strong>'.$post->title.'</strong> removed successfully');
    }
  
}
