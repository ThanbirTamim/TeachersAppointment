<?php

namespace App\Http\Controllers;

use App\TeacherMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherMessageController extends Controller
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
        $value = DB::table('teacher_messages')->latest()->first(); //this query is use gor take only 1st row from table
        return view('teacher.teachermessage',compact('value'));
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
        $value = new TeacherMessage;
        $value->name = $request->name;
        $value->designation = $request->designation;
        $value->department = $request->department;
        $value->university = $request->university;
        $value->message = $request->msg;

        if ($request->hasFile('file')){
            $photo = $request->file->getClientOriginalName();
//            $photo_path = $request->file->path();;
            $request->file->storeAs('public/teacher',$photo);
            $value->file = $photo;
//            $value->photo_path = $photo_path;
        }
        $value->save();
        return back()->with('success','You have successfully add your new message');
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
        //
    }
}
