<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Gallery;
use App\Matto\FileUpload;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function store(Request $request){
        $this->validate($request,[
            'photos[]' => 'required,image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $upload = new FileUpload($request,
                        $name='photos',
                        $title= 'winners-chapel-owerri-'.$request->role,
                        $path = 'public/images/gallery'
                    );
        if($upload->totalSuccess > 0 && count($upload->slugs) >0){
            foreach($upload->slugs as $slug){
                Gallery::create([
                    'url' => $slug,
                    'role' => $request->role
                ]);
            }
        }
        return redirect()->back()->with('info',$upload->report);
    }

    public function update(Request $request,$id){
        $photo = Gallery::find($id);
        $photo->caption = $request->caption;
        $photo->save();

        return redirect()->back()->with('success','Photo updated');
    }

    public function delete($id){
        $photo = Gallery::find($id);
        $url = $photo->imageUrl();
        $photo->delete();
        Storage::delete($url);
        return redirect()->back()->with('success','Photo deleted');
    }
}
