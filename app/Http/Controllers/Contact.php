<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUS;
use App\Mail\Employee;
use App\Mail\Supplier;

class Contact extends Controller
{
    public function client(){
        return view('contact.clientform');
    }

    public function employee(){
        return view('contact.hiring');
    }

    public function supplier(){
        return view('contact.supplierform');
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

        $res = Mail::to("mahakram35@gmail.com")->send(new ContactUS($request));
        
        if($res){
            return back()->with('sucsess' , 'Thanks For Your Message');
        }
        else{
            return back()->with('fail' , 'Something Went Wrong');
        }
    }

    public function newEmployee(Request $request){
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