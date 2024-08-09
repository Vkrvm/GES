<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUS;


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
        Mail::to('fadygamilha@gmail.com')->send(new ContactUS());
        

        dd('sent');
    }
}
