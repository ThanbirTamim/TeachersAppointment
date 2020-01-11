<?php

namespace App\Http\Controllers;

use App\TakenCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TakenCourseController extends Controller
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
        $value = TakenCourse::all();
//        $value = TakenCourse::where('course_type',"Undergraduate")->pluck('id','course_code','course_title');
//        $value2 = TakenCourse::where('course_type',"Graduate")->pluck('id','course_code','course_title');
        return view('teacher.takencourse',compact('value'));
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
        $value = new TakenCourse;
        $value->course_type = $request->course_type;
        $value->course_code = $request->course_code;
        $value->course_title = $request->course_title;
        $value->course_description = $request->course_description;
        $value->save();
        return back()->with('success','You have successfully add a course');
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
        $value = TakenCourse::find($id);
        $value->delete();
        return back()->with('success','You have successfully delete a course');
    }
}
