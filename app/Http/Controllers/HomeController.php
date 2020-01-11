<?php

namespace App\Http\Controllers;

use App\ThesisProjectStudents;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $value = ThesisProjectStudents::all();
        $i = 0;
        $j = 0;
        foreach ($value as $v){
            if($v->course_type == "Thesis"){
                $i++;
            }
            elseif($v->course_type == "Project"){
                $j++;
            }
        }
        return view('home',compact('value','i','j'));
    }
}
