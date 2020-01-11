<?php

namespace App\Http\Controllers;

use App\Acchivements;
use App\Event;
use App\JoinThesisProject;
use App\NoticeBoard;
use App\ProfessionalExperience;
use App\RecentProject;
use App\SlideShow;
use App\SlotOccupy;
use App\SlotPerDay;
use App\TakenCourse;
use App\TeacherMembership;
use App\TeacherRoutine;
use App\ThesisProjectStudents;
use App\WaitingForAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentHomeController extends Controller
{
    public function index(){
        $value1 = SlideShow::all();
        $value9 = Event::orderBy('created_at','desc')->take(10)->get(); //first 5 row will be taken from tabele as decending order
        $value10 = DB::table('teacher_messages')->latest()->first();
        $notice = NoticeBoard::orderBy('created_at','desc')->take(1)->get();
        return view('appointmenthome',compact('value1','value9','value10','notice'));
    }

    public function eventDetail($id)
    {
        $item = Event::find($id);
        return view('appointmenthome.guestcustomer.eventdetail',compact('item'));
    }
    public function takenCourse()
    {
        $value = TakenCourse::all();
        return view('appointmenthome.guestcustomer.takencourse',compact('value'));
    }
    public function teacherAchievements()
    {
        $value = Acchivements::all();
        return view('appointmenthome.guestcustomer.teacherachievements',compact('value'));
    }
    public function recentThesisProject()
    {
        $value = RecentProject::orderBy('created_at','desc')->take(30)->get();
        return view('appointmenthome.guestcustomer.recentthesisproject',compact('value'));
    }
    public function projectThesisStudents()
    {
        $value = ThesisProjectStudents::orderBy('created_at','desc')->take(30)->get();
        return view('appointmenthome.guestcustomer.projectthesisstudents',compact('value'));
    }
    public function noticeBoard()
    {
        $value = NoticeBoard::orderBy('created_at','desc')->take(10)->get();
        return view('appointmenthome.guestcustomer.noticeboard',compact('value'));
    }
    public function noticeDetail($id)
    {
        $value = NoticeBoard::find($id);
        return view('appointmenthome.guestcustomer.noticedetail',compact('value'));
    }
    public function professionalExperience()
    {
        $value = ProfessionalExperience::all();
        return view('appointmenthome.guestcustomer.professionalexperience',compact('value'));
    }
    public function Membership()
    {
        $value = TeacherMembership::all();
        return view('appointmenthome.guestcustomer.membership',compact('value'));
    }
    public function joinProjectThesis()
    {
        return view('appointmenthome.guestcustomer.joinprojectthesis');
    }
    public function joinProjectThesisStore(Request $request)
    {
        $value = new JoinThesisProject();
        $value->course_type = $request->course_type;
        $value->start_time = $request->start_time;
        $value->name = $request->name;
        $value->student_id = $request->student_id;
        $value->email = $request->email;
        $value->pt_title = $request->pt_title;
        $value->save();
        return back()->with('success','Your Request is Successfully Sent');
    }

    public function routine()
    {
        $value = TeacherRoutine::orderBy('day','asc')->take(10)->get();
        return view('appointmenthome.guestcustomer.routine',compact('value'));
    }

    public function appointmentform(){
        try{
            $day = "";
            $dayindex = ""; //in routine table the column of day's value was 1,2,,3,4,5,6 so i am using that to maintain it.
            $t = "Appointment is Open for";
            if(date('l') == "Friday"){
                $day = "Saturday";
                $dayindex = 1;
            }elseif (date('l') == "Saturday"){
                $day = "Sunday";
                $dayindex = 2;
            }elseif (date('l') == "Sunday"){
                $day = "Monday";
                $dayindex = 3;
            }elseif (date('l') == "Monday"){
                $day = "Tuesday";
                $dayindex = 4;
            }elseif (date('l') == "Tuesday"){
                $day = "Wednesday";
                $dayindex = 5;
            }elseif (date('l') == "Wednesday"){
                $day = "Thursday";
                $dayindex = 6;
            }elseif (date('l') == "Thursday"){
                $t = "Appointment is off for ";
                $day = "Friday";
                $dayindex = 7;
            }
            $today = date('l');
            $value = SlotPerDay::where('day',$dayindex)->first();
//        dd($value);
            $waiting = WaitingForAppointment::all();

//        dd($value);
            //this portion is use for show avaliable  slots
            $waitingslot = array();
            $x = 0;
            foreach ($waiting as $i){
                $waitingslot[$x] = $i->slot;
                $x++;
            }

            $slotoccupy = SlotOccupy::all();
            $slotoccupylist = array();
            $x = 0;
            foreach ($slotoccupy as $i){
                $slotoccupylist[$x] = $i->slot;
                $x++;
            }

            $allslots = array();
            $x = 0;
            if($value != null){
                if($value->slot1 != null){
                    $allslots[$x] = $value->slot1;
                    $x++;
                }
                if($value->slot2 != null){
                    $allslots[$x] = $value->slot2;
                    $x++;
                }
                if($value->slot3 != null){
                    $allslots[$x] = $value->slot3;
                    $x++;
                }
                if($value->slot4 != null){
                    $allslots[$x] = $value->slot4;
                    $x++;
                }
                if($value->slot5 != null){
                    $allslots[$x] = $value->slot5;
                    $x++;
                }
                if($value->slot6 != null){
                    $allslots[$x] = $value->slot6;
                    $x++;
                }
                if($value->slot7 != null){
                    $allslots[$x] = $value->slot7;
                    $x++;
                }
                if($value->slot8 != null){
                    $allslots[$x] = $value->slot8;
                    $x++;
                }
                if($value->slot9 != null){
                    $allslots[$x] = $value->slot9;
                    $x++;
                }
                if($value->slot10 != null){
                    $allslots[$x] = $value->slot10;
                    $x++;
                }
                if($value->slot11 != null){
                    $allslots[$x] = $value->slot11;
                    $x++;
                }
                if($value->slot12 != null){
                    $allslots[$x] = $value->slot12;
                    $x++;
                }
                if($value->slot13 != null){
                    $allslots[$x] = $value->slot13;
                    $x++;
                }
                if($value->slot14 != null){
                    $allslots[$x] = $value->slot14;
                    $x++;
                }
                if($value->slot15 != null){
                    $allslots[$x] = $value->slot15;
                    $x++;
                }
                if($value->slot16 != null){
                    $allslots[$x] = $value->slot16;
                    $x++;
                }
                if($value->slot17 != null){
                    $allslots[$x] = $value->slot17;
                    $x++;
                }
                if($value->slot18 != null){
                    $allslots[$x] = $value->slot18;
                    $x++;
                }
                if($value->slot19 != null){
                    $allslots[$x] = $value->slot19;
                    $x++;
                }
                if($value->slot20 != null){
                    $allslots[$x] = $value->slot20;
                    $x++;
                }
                if($value->slot21 != null){
                    $allslots[$x] = $value->slot21;
                    $x++;
                }
                if($value->slot22 != null){
                    $allslots[$x] = $value->slot22;
                    $x++;
                }
                if($value->slot23 != null){
                    $allslots[$x] = $value->slot23;
                    $x++;
                }
                if($value->slot24 != null){
                    $allslots[$x] = $value->slot24;
                    $x++;

                }
                if($value->slot25 != null){
                    $allslots[$x] = $value->slot25;
                    $x++;
                }
                if($value->slot26 != null){
                    $allslots[$x] = $value->slot26;
                    $x++;

                }
                if($value->slot27 != null){
                    $allslots[$x] = $value->slot27;
                    $x++;
                }
                if($value->slot28 != null){
                    $allslots[$x] = $value->slot28;
                    $x++;
                }
                if($value->slot29 != null){
                    $allslots[$x] = $value->slot29;
                    $x++;
                }
                if($value->slot30 != null){
                    $allslots[$x] = $value->slot30;
                    $x++;
                }
                if($value->slot31 != null){
                    $allslots[$x] = $value->slot31;
                    $x++;
                }
                if($value->slot32 != null){
                    $allslots[$x] = $value->slot32;
                    $x++;
                }
                if($value->slot33 != null){
                    $allslots[$x] = $value->slot33;
                    $x++;
                }
                if($value->slot34 != null){
                    $allslots[$x] = $value->slot34;
                    $x++;
                }
                if($value->slot35 != null){
                    $allslots[$x] = $value->slot35;
                    $x++;
                }
                if($value->slot36 != null){
                    $allslots[$x] = $value->slot36;
                    $x++;
                }
            }

            $foo = (array_diff($allslots, $slotoccupylist));
//            $foo = (array_diff($waitingslot, $slotoccupylist));
            return view('appointmenthome.guestcustomer.appointment',compact('day','today', 't','value','waiting','foo','allslots'));
        }catch (\Exception $e){
            return "Routine is updating Please try again few minutes later";
        }
    }

    public function appointmentformaction(Request $request){
        try{
//            dd($request->id);
            if($request->id != null){
                $value = new WaitingForAppointment();
                $value->std_id = $request->std_id;
                $value->name = $request->name;
                $value->phone = $request->phone;
                $value->email = $request->email;
                $value->problem = $request->problem;
                $value->slot = $request->slot;
                $value->save();

                $value1 = WaitingForAppointment::find($request->id);
                $value1->delete();
                return redirect('/appointment_request')->with('success','Rescheduling is Successfully; Now accept rescheduling time on request page');
            }else{
                $value = new WaitingForAppointment();
                $value->std_id = $request->std_id;
                $value->name = $request->name;
                $value->phone = $request->phone;
                $value->email = $request->email;
                $value->problem = $request->problem;
                $value->slot = $request->slot;
                $value->save();
                return back()->with('success','Your Request is Successfully Sent; Wait for confirmation to check your mail');
            }
        }catch(\Exception $e){
            return back()->with('alert','Which slot you selected this slot is already under waiting for appointment, please select another slot');
        }

    }
}
