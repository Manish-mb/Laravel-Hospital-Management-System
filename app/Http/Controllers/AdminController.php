<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\doctor;

use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    
    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image =$request->image;

        $imagename =time().'.'.$image->getClientoriginalExtension();
        $request->image->move('doctorimage', $imagename);

        $doctor->image=$imagename;
        $doctor->doctor_name=$request->doctor_name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room_no=$request->room_no;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Add Successfully');

    }

    public function show_appointment()
    {
        $data = appointment::all();
        return view('admin.show_appointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status='approved';

        $data->save();

        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status='Calceled';

        $data->save();

        return redirect()->back();
    }

    public function show_doctor()
    {
        $data = doctor::all();
        return view('admin.show_doctor',compact('data'));
    }

    public function doctor_delete($id)
    {
        $data = doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function doctor_update($id)
    {
          $data = doctor::find($id);
          return view('admin.doctor_update',compact('data'));
    }

    public function edit_doctor(Request $request , $id)
    {
       $data =  doctor::find($id);

       $doctor->doctor_name=$request->doctor_name;
       $data->phone = $request->phone;
       $data->speciality = $request->speciality;
       $data->room_no = $request->room_no;
       $image = $request->file;

       if($image){

        $imagename =time().'.'.$image->getClientoriginalExtension();
        $request->image->move('doctorimage', $imagename);
        $doctor->image=$imagename;

       }
       
       $doctor->save();

       return redirect()->back()->with('message', 'Doctor Updated Successfully');

    }
}
