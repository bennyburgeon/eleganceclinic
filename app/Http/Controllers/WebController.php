<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        // return "hiii";
        return view('web.index');
    }

    public function clinics(){
        // return "hiii";
        return view('web.clinics');
    }

    public function treatments(){
        // return "hiii";
        return view('web.treatments');
    }

    public function appointment(){
        // return "hiii";
        return view('web.appointment');
    }

    public function packages(){
        // return "hiii";
        return view('web.packages');
    }

    public function contact(){
        // return "hiii";
        return view('web.contact');
    }
}
