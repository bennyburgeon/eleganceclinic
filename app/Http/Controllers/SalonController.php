<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = salon::all();
    return view('salon.view', compact('data'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('salon.index');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    if ($request->file('image')) {
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->move(public_path('image/salon/'), $filename);
    }
    $data = new Salon();
    $data->name = $request->name;
    $data->google = $request->google;
    $data->facebook = $request->facebook;
    $data->about = $request->about;
    $data->opening_hours = $request->hours;
    $data->image = $filename;
    $data->opening_hours = $request->packages;
    $data->opening_hours = $request->pricelist;
    $data->opening_hours = $request->gift;
    $data->opening_hours = $request->map;
    $data->opening_hours = $request->button_link;
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

    $image = [];
    for ($i = 1; $i < 7; $i++) {
      if ($request->has('img' . $i . '')) {
        array_push($image, $i);
      } else {
        array_push($image, "0");
      }
    }
    $imgs = implode(',', $image);
    $data->payment = $imgs;
    $data->packages = $request->packages;
    $data->pricelist = $request->pricelist;
    $data->gift = $request->gift;
    $data->map = $request->map;
    $data->booking_button = $request->button_link;
    $data->save();
    return redirect()->route('admin.salons.index');
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
    $data = Salon::find($id);
    return view('salon.edit', compact('data'));
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
    $data = salon::find($id);

    if ($req->file('image')) {
      $file = $req->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();

      $file->move(public_path('image/salon/'), $filename);
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

    $image = [];
    for ($i = 1; $i < 7; $i++) {
      if ($req->has('img' . $i . '')) {
        array_push($image, $i);
      } else {
        array_push($image, "0");
      }
    }
    //dd($imgArr);

    $imgs = implode(',', $image);
    $data->payment = $imgs;

    $data->packages = $req->packages;
    $data->pricelist = $req->pricelist;
    $data->gift = $req->gift;
    $data->map = $req->map;
    $data->booking_button = $req->button_link;
    // dd($data);
    $data->update();
    return redirect()->route('admin.salons.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $data = Salon::find($id);
    $data->delete();
    return redirect('salons');
  }
}