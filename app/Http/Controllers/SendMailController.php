<?php

namespace App\Http\Controllers;
use App\AppointmentRequestApprove;
use App\AppointmentRequestDecline;
use App\Mail\ContactForMail;
use App\SlotOccupy;
use App\WaitingForAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(request $request){
        $data = $request->all();
//        dd($data['email']);
        Mail::to($data['email'])->send(new ContactForMail($data));
//        redirect('/');
//        php artisan config:cache
        return back()->with('success','You have successfully send mail');
//->with('mail Sent', 'Uw contact aanvraag is verzonden');
    }
    public function appointmentRequestApprove(Request $request){
        try{
            $value = new SlotOccupy();
            $value->std_id = $request->std_id;
            $value->name = $request->name;
            $value->phone = $request->phone;
            $value->email = $request->email;
            $value->problem = $request->problem;
            $value->slot = $request->slot;
            $value->save();

            $ara = new AppointmentRequestApprove();
            $ara->std_id = $request->std_id;
            $ara->name = $request->name;
            $ara->phone = $request->phone;
            $ara->email = $request->email;
            $ara->problem = $request->problem;
            $ara->slot = $request->slot;
            $ara->save();


            $wait = WaitingForAppointment::find($request->id);
//        dd($request->id);
            $wait->delete();


            $value->name = "Hey ".$request->name." !!!!";
            $value->phone = "Your appointment is granted";
            Mail::to($value['email'])->send(new ContactForMail($value));
//        return back()->with('success','You have successfully decline a appointment request');
            return back()->with('success','You have successfully approved request and sent mail successfully');
        }catch (\Exception $e){
            return back()->with('alert','This slot is booked already!!!! Please Decline or rescheduling');

        }

    }


    public function appointmentRequestDecline(Request $request){

        $ara = new AppointmentRequestDecline();
        $ara->std_id = $request->std_id;
        $ara->name = $request->name;
        $ara->phone = $request->phone;
        $ara->email = $request->email;
        $ara->problem = $request->problem;
        $ara->slot = $request->slot;
        $ara->save();


        $wait = WaitingForAppointment::find($request->id);
        $wait->delete();

        $ara->name = "Hey ".$request->name." !!!!";
        $ara->phone = "Your appointment is decline; reason: ".$request->decline;
        $ara->slot = "Don't come at: ".$request->slot;
        Mail::to($ara['email'])->send(new ContactForMail($ara));

//        return back()->with('success','You have successfully decline a appointment request');
        return back()->with('alert','You have decline request and sent mail to ('.$request->name.') successfully');
    }





}
