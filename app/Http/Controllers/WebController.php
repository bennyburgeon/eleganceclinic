<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Clinic;
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
        $data=Clinic::all();
        return view('web.clinics',compact('data'));
    }

    public function treatments(){
        // return "hiii";
        $data=Treatment::all();
        $clinic=Clinic::all();
        return view('web.treatments',compact('data','clinic'));
    }

    public function appointment(){
        // return "hiii";
        $data=Clinic::all();
        return view('web.appointment',compact('data'));
    }

    public function packages(){
        // return "hiii";
        return view('web.packages');
    }

    public function contact(){
        $data = Clinic::all();
        return view('web.contact',compact('data'));
    }

    public function details($id){
        $salon=Clinic::find($id);
        $salons=Clinic::all();
        return view('web.clinic-details',compact('salon','salons'));
    }
    public function aftercare(){
        // return "hiii";
        $data=Treatment::all();
        return view('web.aftercare',compact('data'));
    }

    public function afterCareDetails($id){
        $data=Treatment::find($id);
        $datas=Treatment::all();
        return view('web.aftercare-details',compact('data','datas'));
    }
}
