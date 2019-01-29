<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:units',
        ],[
            'unique' => 'The unit already exist'
        ]);
        Unit::create([
            'name' => $request->name,
            'about' => $request->about,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->back()->with('success','New unit added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.unit')->with('unit',Unit::where('slug',$id)->firstorfail());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.admin.edit-unit')->with('unit',Unit::where('slug',$id)->firstorfail());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $unit = Unit::where('slug',$id)->firstorfail();
       $unit->about = $request->about;
        return redirect()->route('admin')->with('success',$unit->name.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function discard($id)
    {
        $service = Unit::where('slug',$id)->firstorfail();
        $service->delete();

        return redirect()->back()->with('success','Service unit <strong>'.$unit->name.'</strong> discarded');
  }
}
