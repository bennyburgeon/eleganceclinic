<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Clinic::all();
    return view('clinic.view', compact('data'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('clinic.index');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $data = new Clinic();
    if ($request->file('image')) {
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->move(public_path('image/clinic/'), $filename);
      $data->image = $filename;
    }
    $data->name = $request->name;
    $data->google = $request->google;
    $data->facebook = $request->facebook;
    $data->about = $request->about;
    $data->opening_hours = $request->hours;
    //$data->image = $filename;
    $imgArr = [];
    for ($i = 1; $i < 5; $i++) {
      if ($request->has('image' . $i . '')) {
        array_push($imgArr, $i);
      } else {
        array_push($imgArr, "0");
      }
    }
    $img = implode(',', $imgArr);
    $data->facilities = $img;

    $data->packages = $request->packages;
    $data->pricelist = $request->pricelist;
    $data->gift = $request->gift;
    $data->map = $request->map;
    $data->appointment = $request->appointment;
    $data->package_link = $request->package_link;
    //dd($data);
    $data->save();
    return redirect()->route('admin.clinic.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = Clinic::find($id);
    return view('clinic.edit', compact('data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $req, $id)
  {
    $data = Clinic::find($id);

    if ($req->file('image')) {
      $file = $req->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();

      $file->move(public_path('image/clinic/'), $filename);
      $image_path=public_path('image/clinic/' . $data->image);
      if(file_exists($image_path)){
        unlink($image_path);
    }
      $data->image = $filename;
    }
    //dd($filename);
    $data->name = $req->name;
    $data->google = $req->google;
    $data->facebook = $req->facebook;
    $data->about = $req->about;
    $data->opening_hours = $req->hours;
    

    $imgArr = [];
    for ($i = 1; $i < 5; $i++) {
      if ($req->has('image' . $i . '')) {
        array_push($imgArr, $i);
      } else {
        array_push($imgArr, "0");
      }
    }
    //dd($imgArr);

    $img = implode(',', $imgArr);
    $data->facilities = $img;


    $data->packages = $req->packages;
    $data->pricelist = $req->pricelist;
    $data->gift = $req->gift;
    $data->map = $req->map;
    $data->appointment = $req->appointment;
    $data->package_link = $req->package_link;
    // dd($data);
    $data->update();
    return redirect()->route('admin.clinic.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
   $data = Clinic::find(decrypt($id));
   $image_path=public_path('image/clinic/' . $data->image);
        
   if(file_exists($image_path)){
       unlink($image_path);
   }
    $data->delete();
    return redirect()->route('admin.clinic.index');
  }
}