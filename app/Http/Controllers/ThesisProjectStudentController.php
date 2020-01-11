<?php

namespace App\Http\Controllers;

use App\ThesisProjectStudents;
use Illuminate\Http\Request;

class ThesisProjectStudentController extends Controller
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
        $value = ThesisProjectStudents::all();
        return view('teacher.thesisprojectstudent',compact('value'));
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
        $value = new ThesisProjectStudents();
        $value->course_type = $request->course_type;
        $value->start_time = $request->start_time;
        $value->name = $request->name;
        $value->student_id = $request->student_id;
        $value->email = $request->email;
        $value->pt_title = $request->pt_title;
        $value->save();
        return back()->with('success','You have successfully add a '.$request->course_type.' student');
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
        $value = ThesisProjectStudents::find($id);
        $value->delete();
        return back()->with('success','You have successfully delete student');
    }
}
