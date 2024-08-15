<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    public function advertising(){
        return view('Services.advertising');
    }

    public function hrSolutions(){
        return view('Services.HrSolutions');
    }

    public function financeSolutions(){
        return view('Services.Finance');
    }

    public function itsolutions(){
        return view('Services.itSolutions');
    }
}
