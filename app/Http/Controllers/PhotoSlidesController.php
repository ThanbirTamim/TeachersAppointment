<?php

namespace App\Http\Controllers;

use App\SlideShow;
use Illuminate\Http\Request;

class PhotoSlidesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = SlideShow::all();
        return view('teacher.slideshow',compact('value'));
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
        $value = new SlideShow;

        request()->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
//        $value->adminname = Auth::user()->name;  //admin er name add korbar jonno migration e column add korte hobe

        if ($request->hasFile('file')){
            $photo = $request->file->getClientOriginalName();
            $request->file->storeAs('public/slideshow',$photo);

            $value->file = $photo;
        }
        $value->save();
        return back()->with('success','You have successfully add a photo slides. [N.B. Keep only 4 photo slides]');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = SlideShow::all();
        $c = 0;
        foreach ($count as $x){
            $c++;
        }
        if($c >= 5){
            $value = SlideShow::find($id);
            $value->delete();
            return back()->with('success','You have successfully delete a photo slides');
        }
        else{
            return back()->with('error','You have to keep at least 4 slides. So at first add some slides then delete previous slides');
        }

    }
}
