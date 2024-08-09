<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    public function advertising(){
        return view('services.advertising');
    }
    
    public function hrSolutions(){
        return view('services.hrsolutions');
    }
    
    public function financeSolutions(){
        return view('services.finance');
    }

    public function itsolutions(){
        return view('services.itsolutions');
    }
}
