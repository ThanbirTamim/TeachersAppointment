<?php

namespace App\Http\Controllers;

use App\JoinThesisProject;
use App\ThesisProjectStudents;
use Illuminate\Http\Request;

class JoinRequestWithTeamController extends Controller
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
        $value = JoinThesisProject::orderBy('created_at','desc')->get();
        return view('teacher.joinrequestwithteam',compact('value'));
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
        $id = $request->id;
//        dd($id);
        $value->save();
//        destroy($id);
        $this->destroy($id);
        return back()->with('success',$request->student_id.' is successfully add to your team');
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
        $value = JoinThesisProject::find($id);
        $value->delete();
        return back()->with('success','You have successfully decline this request');
    }
}
