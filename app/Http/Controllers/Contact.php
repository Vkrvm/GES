<?php

namespace App\Http\Controllers;

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
        $res = Mail::to('fadygamilha@gmail.com')->send(new ContactUS($request));
        
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
        $res = Mail::to('fadygamilha@gmail.com')->send(new Employee($request,$fileName));
        
        if($res){
            return back()->with('sucsess' , 'Thanks For Your Message');
        }
        else{
            return back()->with('fail' , 'Something Went Wrong');
        }
    }

    public function newSupplier(Request $request){
        $res = Mail::to('fadygamilha@gmail.com')->send(new Supplier($request));
        
        if($res){
            return back()->with('sucsess' , 'Thanks For Your Message');
        }
        else{
            return back()->with('fail' , 'Something Went Wrong');
        }
    }
}
