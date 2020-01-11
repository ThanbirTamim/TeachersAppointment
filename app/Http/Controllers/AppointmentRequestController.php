<?php

namespace App\Http\Controllers;

use App\SlotOccupy;
use App\SlotPerDay;
use App\WaitingForAppointment;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class AppointmentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = WaitingForAppointment::all();
        return view('teacher.appointmentrequest',compact('value'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $item = WaitingForAppointment::find($id);
            $day = "";
            $dayindex = ""; //in routine table the column of day's value was 1,2,,3,4,5,6 so i am using that to maintain it.
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
//            dd($waitingslot,$slotoccupylist,$allslots, $foo);
//            portion cloase
            return view('teacher.studentdetail',compact('day','today','value','waiting','item','foo'));
        }catch (\Exception $e){
            return back()->with('alert','You got some problems');
        }

//        return view('teacher.studentdetail',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $value = new SlotOccupy();
//        $value->std_id = $request->std_id;
//        $value->name = $request->name;
//        $value->phone = $request->phone;
//        $value->email = $request->email;
//        $value->problem = $request->problem;
//        $value->slot = $request->slot;
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
//        $value = WaitingForAppointment::find($id);
//        $value->delete();
//        return back()->with('success','You have successfully decline a appointment request');
    }
}
