<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CustomerReview;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Salon;
use App\Models\Treatment;

class WebController extends Controller
{
    public function index(){
        // return "hiii";
        $data= Banner::all();
        $notification=Notification::first();
        $reviews=CustomerReview::all();
        return view('web.index',compact('data','notification','reviews'));
    }

    public function clinics(){
        // return "hiii";
        $data=Salon::all();
        return view('web.clinics',compact('data'));
    }

    public function treatments(){
        // return "hiii";
        $data=Treatment::all();
        return view('web.treatments',compact('data'));
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
        $data = Salon::all();
        return view('web.contact',compact('data'));
    }

    public function details($id){
        $salon=Salon::find($id);
        $salons=Salon::all();
        return view('web.clinic-details',compact('salon','salons'));
    }
    public function aftercare(){
        // return "hiii";
        return view('web.aftercare');
    }
}
