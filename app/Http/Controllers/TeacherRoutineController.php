<?php

namespace App\Http\Controllers;

use App\SlotPerDay;
use App\TeacherRoutine;
use Illuminate\Http\Request;

class TeacherRoutineController extends Controller
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
        $value = TeacherRoutine::orderBy('day','asc')->take(10)->get();
        return view('teacher.teacherroutine',compact('value'));
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
        try{
            $rtn = new TeacherRoutine();
            $rtn->day = $request->day;
            $rtn->period1 = $request->period1;
            $rtn->period2 = $request->period2;
            $rtn->period3 = $request->period3;
            $rtn->period4 = $request->period4;
            $rtn->period5 = $request->period5;
            $rtn->period6 = $request->period6;

            $slot = array();
            if($request->day == 1){
                if ($request->period1 == "Counselling"){
                    $slot[0] = 8;
                }
                if ($request->period2 == "Counselling"){
                    $slot[1] = 10;
                }
                if ($request->period3 == "Counselling"){
                    $slot[2] = 11;
                }
                if ($request->period4 == "Counselling"){
                    $slot[3] = 1;
                }
                if ($request->period5 == "Counselling"){
                    $slot[4] = 2;
                }
                if ($request->period6 == "Counselling"){
                    $slot[5] = 4;
                }
            }
            elseif ($request->day == 2){
                if ($request->period1 == "Counselling"){
                    $slot[0] = 8;
                }
                if ($request->period2 == "Counselling"){
                    $slot[1] = 10;
                }
                if ($request->period3 == "Counselling"){
                    $slot[2] = 11;
                }
                if ($request->period4 == "Counselling"){
                    $slot[3] = 1;
                }
                if ($request->period5 == "Counselling"){
                    $slot[4] = 2;
                }
                if ($request->period6 == "Counselling"){
                    $slot[5] = 4;
                }
            }
            elseif ($request->day == 3){
                if ($request->period1 == "Counselling"){
                    $slot[0] = 8;
                }
                if ($request->period2 == "Counselling"){
                    $slot[1] = 10;
                }
                if ($request->period3 == "Counselling"){
                    $slot[2] = 11;
                }
                if ($request->period4 == "Counselling"){
                    $slot[3] = 1;
                }
                if ($request->period5 == "Counselling"){
                    $slot[4] = 2;
                }
                if ($request->period6 == "Counselling"){
                    $slot[5] = 4;
                }
            }
            elseif ($request->day == 4){
                if ($request->period1 == "Counselling"){
                    $slot[0] = 8;
                }
                if ($request->period2 == "Counselling"){
                    $slot[1] = 10;
                }
                if ($request->period3 == "Counselling"){
                    $slot[2] = 11;
                }
                if ($request->period4 == "Counselling"){
                    $slot[3] = 1;
                }
                if ($request->period5 == "Counselling"){
                    $slot[4] = 2;
                }
                if ($request->period6 == "Counselling"){
                    $slot[5] = 4;
                }
            }
            elseif ($request->day == 5){
                if ($request->period1 == "Counselling"){
                    $slot[0] = 8;
                }
                if ($request->period2 == "Counselling"){
                    $slot[1] = 10;
                }
                if ($request->period3 == "Counselling"){
                    $slot[2] = 11;
                }
                if ($request->period4 == "Counselling"){
                    $slot[3] = 1;
                }
                if ($request->period5 == "Counselling"){
                    $slot[4] = 2;
                }
                if ($request->period6 == "Counselling"){
                    $slot[5] = 4;
                }
            }
            elseif ($request->day == 6){
                if ($request->period1 == "Counselling"){
                    $slot[0] = 8;
                }
                if ($request->period2 == "Counselling"){
                    $slot[1] = 10;
                }
                if ($request->period3 == "Counselling"){
                    $slot[2] = 11;
                }
                if ($request->period4 == "Counselling"){
                    $slot[3] = 1;
                }
                if ($request->period5 == "Counselling"){
                    $slot[4] = 2;
                }
                if ($request->period6 == "Counselling"){
                    $slot[5] = 4;
                }
            }
            elseif ($request->day == 7){
                if ($request->period1 == "Counselling"){
                    $slot[0] = 8;
                }
                if ($request->period2 == "Counselling"){
                    $slot[1] = 10;
                }
                if ($request->period3 == "Counselling"){
                    $slot[2] = 11;
                }
                if ($request->period4 == "Counselling"){
                    $slot[3] = 1;
                }
                if ($request->period5 == "Counselling"){
                    $slot[4] = 2;
                }
                if ($request->period6 == "Counselling"){
                    $slot[5] = 4;
                }
            }

//            dd($slot);
//            $slot1 = "";$slot2 = "";$slot3 = "";$slot4 = "";$slot5 = "";$slot6 = "";$slot7 = "";$slot8 = "";$slot9 = "";
//            $slot10 = "";$slot11 = "";$slot12 = "";$slot13 = "";$slot14 = "";$slot15 = "";$slot16 = "";$slot17 = "";$slot18 = "";
//            $slot19 = "";$slot20 = "";$slot21 = "";$slot22 = "";$slot23 = "";$slot24 = "";$slot25 = "";$slot26 = "";$slot27 = "";
//            $slot28 = "";$slot29 = "";$slot30 = "";$slot31 = "";$slot32 = "";$slot33 = "";$slot34 = "";$slot35 = "";$slot36= "";
            $slot1 = null;$slot2 = null;$slot3 = null;$slot4 = null;$slot5 = null;$slot6 = null;$slot7 = null;$slot8 = null;$slot9 = null;
            $slot10 = null;$slot11 = null;$slot12 = null;$slot13 = null;$slot14 = null;$slot15 = null;$slot16 = null;$slot17 = null;$slot18 = null;
            $slot19 = null;$slot20 = null;$slot21 = null;$slot22 = null;$slot23 = null;$slot24 = null;$slot25 = null;$slot26 = null;$slot27 = null;
            $slot28 = null;$slot29 = null;$slot30 = null;$slot31 = null;$slot32 = null;$slot33 = null;$slot34 = null;$slot35 = null;$slot36= null;
            foreach ($slot as $value){
                if ($value == 8){
                    $slot1 = "8:30";
                    $slot2 = "8:45";
                    $slot3 = "9:00";
                    $slot4 = "9:15";
                    $slot5 = "9:30";
                    $slot6 = "9:45";
//                    dd($value, $slot1,$slot2,$slot3,$slot4,$slot5,$slot6);
                }
                elseif ($value == 10){
                    $slot7 = "10:00";
                    $slot8 = "10:15";
                    $slot9 = "10:30";
                    $slot10 = "10:45";
                    $slot11 = "11:00";
                    $slot12 = "11:15";
//                    dd($value, $slot7,$slot8,$slot9,$slot10,$slot11,$slot12);
                }
                elseif ($value == 11){
                    $slot13 = "11:30";
                    $slot14 = "11:45";
                    $slot15 = "12:00";
                    $slot16 = "12:15";
                    $slot17 = "12:30";
                    $slot18 = "12:45";
//                    dd($value, $slot13,$slot14,$slot15,$slot16,$slot17,$slot18);
                }
                elseif ($value == 1){
                    $slot19 = "1:00";
                    $slot20 = "1:15";
                    $slot21 = "1:30";
                    $slot22 = "1:45";
                    $slot23 = "2:00";
                    $slot24 = "2:15";
                }
                elseif ($value == 2){
                    $slot25 = "2:30";
                    $slot26 = "2:45";
                    $slot27 = "3:00";
                    $slot28 = "3:15";
                    $slot29 = "3:30";
                    $slot30 = "3:45";
                }
                elseif ($value == 4){
                    $slot31 = "4:00";
                    $slot32 = "4:15";
                    $slot33 = "4:30";
                    $slot34 = "4:45";
                    $slot35 = "5:00";
                    $slot36= "5:15";
//                    dd($value, $slot31,$slot32,$slot33,$slot34,$slot35,$slot36);

                }
            }
//            dd($slot1,$slot2,$slot3,$slot4,$slot5,$slot6,$slot7,$slot8,$slot9,$slot10,$slot11,$slot12,$slot13,$slot14,$slot15,$slot16,$slot17,$slot18,$slot19,$slot20,$slot21,
//                $slot22,$slot23,$slot24,$slot25,$slot26,$slot27,$slot28,$slot29,$slot30,$slot31,$slot32,$slot33,$slot34,$slot35,$slot36);
            $rtn->save();
            $slotperday = new SlotPerDay();
            $slotperday->day = $request->day;
            $slotperday->slot1 = $slot1;
            $slotperday->slot2 = $slot2;
            $slotperday->slot3 = $slot3;
            $slotperday->slot4 = $slot4;
            $slotperday->slot5 = $slot5;
            $slotperday->slot6 = $slot6;
            $slotperday->slot7 = $slot7;
            $slotperday->slot8 = $slot8;
            $slotperday->slot9 = $slot9;
            $slotperday->slot10 = $slot10;
            $slotperday->slot11 = $slot11;
            $slotperday->slot12 = $slot12;
            $slotperday->slot13 = $slot13;
            $slotperday->slot14 = $slot14;
            $slotperday->slot15 = $slot15;
            $slotperday->slot16 = $slot16;
            $slotperday->slot17 = $slot17;
            $slotperday->slot18 = $slot18;
            $slotperday->slot19 = $slot19;
            $slotperday->slot20 = $slot20;
            $slotperday->slot21 = $slot21;
            $slotperday->slot22 = $slot22;
            $slotperday->slot23 = $slot23;
            $slotperday->slot24 = $slot24;
            $slotperday->slot25 = $slot25;
            $slotperday->slot26 = $slot26;
            $slotperday->slot27 = $slot27;
            $slotperday->slot28 = $slot28;
            $slotperday->slot29 = $slot29;
            $slotperday->slot30 = $slot30;
            $slotperday->slot31 = $slot31;
            $slotperday->slot32 = $slot32;
            $slotperday->slot33 = $slot33;
            $slotperday->slot34 = $slot34;
            $slotperday->slot35 = $slot35;
            $slotperday->slot36 = $slot36;
            $slotperday->save();
            return back()->with('success','You have successfully add routine');
        }catch (\Exception $e){
            return back()->with('alert','You have some problem or maybe you have to delete at first previous day of routine which you want to add now');
        }
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
    public function destroy($day)
    {
        $value = TeacherRoutine::where('day',$day)->first();
        $value->delete();

        $value1 = SlotPerDay::where('day',$day)->first();
        $value1->delete();
        return back()->with('success','You have successfully delete a routine for a day');
    }
}
