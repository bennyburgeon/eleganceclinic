<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use App\Models\Salon;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function storeOffer(Request $request)
    {
      $data = new Offer();
      $data->salon_id=$request->category;
      $data->title = $request->offers;
      $data->price = $request->price;
  
      $data->save();
      return redirect()->route('admin.view.offer');
  
    }

    public function viewOffer()
    {
     $salon=Salon::all();
      $data = Offer::all();
     // dd($data[0]->offer_id);
      return view('offer.view-offers', compact('data','salon'));
    }

    function UpdateOffer(request $req)
    {
      //  dd($req->id);
      $data = Offer::find($req->id);
      $data->title = $req->offers;
      //dd($data);
      $data->price = $req->price;
  
      $data->update();
      return redirect()->route('admin.view.offer');
    }

    function DeleteOffer($offer_id)
    {
      $data = Offer::find($offer_id);
      $data->delete();
      return redirect()->route('admin.view.offer');
  
    }
}
