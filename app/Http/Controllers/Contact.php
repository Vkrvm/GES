<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
use App\Mail\Client;
use App\Mail\Employee;
use App\Mail\Supplier;

class Contact extends Controller
{
    public function client(){
        return view('Contact.clientForm');
    }

    public function employee(){
        return view('Contact.hiring');
    }

    public function supplier(){
        return view('Contact.supplierForm');
    }
    public function newContact(Request $request){
        $request->validate([
            "name" => "required|string",
            "phone" => "required|numeric",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required|string|max:255"

        ]);

        $res = Mail::to("mahakram35@gmail.com")->send(new ContactUs($request));

        if($res){
            return back()->with('sucsess' , 'Thanks For Your Message');
        }
        else{
            return back()->with('fail' , 'Something Went Wrong');
        }
    }
    public function newClient(Request $request){
        $request->validate([
            "name" => "required|string",
            "phone" => "required|numeric",
            "email" => "required|email",
            "region" => "required",
            "inquiry" => "required",
            "message" => "required|string|max:255"

        ]);

        $res = Mail::to("mahakram35@gmail.com")->send(new Client($request));

        if($res){
            return back()->with('sucsess' , 'Thanks For Your Message');
        }
        else{
            return back()->with('fail' , 'Something Went Wrong');
        }
    }

    public function newEmployee(Request $request){
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "phone" => "required|numeric",
            "address" => "required|string",
            "gender" => "required|string",
            "maritalStatus" => "required|string",
            "recruitmentStatus" => "required|string",
            "qualification" => "required|string",
            "graduationYear" => "required",
            "jobPosition" => "required|string",
            "resume" => "required|max:10000|mimes:pdf"
        ]);

        $fileName = time() . "." . $request->file('resume')->extension();
        $request->resume->move('attachment',$fileName);
        $res = Mail::to("mahakram35@gmail.com")->send(new Employee($request,$fileName));

        if($res){
            File::delete('attachment/'.$fileName);
            return back()->with('sucsess' , 'Thanks For Your Message');
        }
        else{
            File::delete('attachment/'.$fileName);
            return back()->with('fail' , 'Something Went Wrong');
        }
    }

    public function newSupplier(Request $request){
        $request->validate([
            "name" => "required|string",
            "companyName" => "required|string",
            "email" => "required|email",
            "city" => "required|string",
            "address" => "required|string",
            "phone" => "required|numeric",
            "companyProfile" => "required|max:10000|mimes:pdf"
        ]);
        $fileName = time() . "." . $request->file('companyProfile')->extension();
        $request->companyProfile->move('attachment',$fileName);
        $res = Mail::to("mahakram35@gmail.com")->send(new Supplier($request,$fileName));
        if($res){
            File::delete('attachment/' . $fileName);
            return back()->with('sucsess' , 'Thanks For Your Message');
        }
        else{
            File::delete('attachment/'.$fileName);
            return back()->with('fail' , 'Something Went Wrong');
        }
    }
}
