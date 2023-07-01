<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addview(){
        if (Auth::id()){
            if (Auth::user()->usertype==1){
                return view('admin.add_doctor');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }

    }
    public function upload(Request $request){
        $doctor = new Doctor();
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('images',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }
    public function showAppointment(){
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data = Appointment::all();
                return view('admin.showappointment', compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function approved($id){
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }
    public function cancelled($id){
        $data = Appointment::find($id);
        $data->status = 'Cancelled';
        $data->save();
        return redirect()->back();
    }
    public function showDoctor(){
        $data = Doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
    public function delete($id){
        $data = Doctor::find($id);
        $data -> delete();
        return redirect()->back()->with('warning','Doctor Deleted!');
    }
    public function update($id){
        $data = Doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }
    public function editDoctor(Request $request, $id){
        $doctor = Doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $image=$request->file;
        if($image) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('images', $imagename);
            $doctor->image = $imagename;
        }
       $doctor->save();
       return redirect()->back();

    }
    public function emailView($id){
        $data = Appointment::find($id);
        return view('admin.email_view',compact('data'));
    }
    public function sendEmail(Request $request,$id){
        $data = Appointment::find($id);
        $details = [
            'greeting' => $request->greeting,
        'body' => $request->body,
        'actiontext' => $request->actiontext,
        'actionurl' => $request->actionurl,
        'endpart' => $request->endpart
        ];
        \Illuminate\Support\Facades\Notification::send($data,new SendEmailNotification($details));
        return redirect()->back();
    }
}
