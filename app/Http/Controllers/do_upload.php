<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Notification;
use App\Models\Testimmodel;
use App\Models\Cardmodel;
use App\Models\Detailmodel;
use App\Models\Treatmentmodel;
use App\Models\Offer;
use App\Models\Gallerymodel;
use App\Models\salon;
use App\Models\Award;
use Illuminate\Support\Facades\DB;

class do_upload extends Controller
// carousal
{
  // public function addImage()
  // {
  //   return view('banner');
  // }

  // public function storeImage(Request $request)
  // {
  //   $data = new Banner();


  //   if ($request->file('image')) {
  //     $file = $request->file('image');
  //     $filename = date('YmdHi') . $file->getClientOriginalName();

  //     $file->move(public_path('image'), $filename);
  //     $data['image'] = $filename;

  //   }
  //   $data->title_main = $request->title_main;
  //   $data->title_sub = $request->title_sub;
  //   $data->title_para = $request->title_para;
  //   $data->button_title = $request->title_button;
  //   $data->button_link = $request->button_link;
  //   // dd($data);

  //   $data->save();
  //   return redirect('/view-image');

  // }
  // public function viewImage()
  // {
  //   $imageData = Banner::all();
  //   return view('view-banner', compact('imageData'));
  // }



  // function edit($id)
  // {
  //   //dd($id);
  //   $data = Banner::find($id);
  //   return view('edit-banner', compact('data'));
  // }

  // function update(Request $req)
  // {
  //   //dd($req->id);
  //   $data = Banner::find($req->bnr);
  //   //dd($data);

  //   //unlink('image/' . $data->image);
  //   if ($req->file('image')) {
  //     $file = $req->file('image');
  //     $filename = date('YmdHi') . $file->getClientOriginalName();

  //     $file->move(public_path('image'), $filename);
  //     $data['image'] = $filename;

  //   }
  //   //dd($data);
  //   $data->title_main = $req->title_main;
  //   //dd($req->title_main);
  //   $data->title_sub = $req->title_sub;
  //   $data->title_para = $req->title_para;
  //   $data->button_title = $req->title_button;
  //   $data->button_link = $req->button_link;
  //   //dd($data);
  //   $data->update();

  //   return redirect('/view-image');

  // }

  // function delete($id)
  // {
  //   $data = Banner::find($id);
  //   $data->delete($id);
  //   return redirect('view-image');
  // }

  //marquee

  public function Notification()
  {
    $data = Notification::all();
    // dd($data);
    // dd("text");
    return view('notification', compact('data'));
  }


  public function notificationSubmit(Request $request)
  {
    $data = Notification::find($request->id);

    $data->title = $request->title;
    $data->discription = $request->discription;
    $data->link = $request->link;
    //dd($data);
    $data->update();
    return redirect('/notification');
  }

  // testimonial

  public function Awards()
  {
    return view('awards');
  }

  public function awardSubmit(Request $request)
  {
    $data = new Award();
    if ($request->file('image')) {
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();

      $file->move(public_path('image'), $filename);
      $data['image'] = $filename;

    }
    //dd($file);
    $data->name = $request->name;
    $data->awarded_by = $request->award;
    $data->year = $request->year;
    //dd($data);
    $data->save();
    return redirect('/award-view');
  }

  public function awardView()
  {
    $data = Award::all();
    return view('view-awards', compact('data'));
  }

  public function awardEdit($id)
  {
    $data = Award::find($id);
    return view('edit-awards', compact('data'));
  }

  public function awardDelete($id)
  {
    $data = Award::find($id);
    $data->delete();
    return redirect('/award-view');
  }

  public function awardUpdate(Request $req)
  {
    $data = Award::find($req->awrd);
    if ($req->file('image')) {
      $file = $req->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();

      $file->move(public_path('image'), $filename);
      $data['image'] = $filename;

    }
    //dd($filename);
    $data->name = $req->name;
    $data->awarded_by = $req->award;
    $data->year = $req->year;
    //dd($data);
    $data->update();
    return redirect('/award-view');
  }

  public function Salons()
  {
    return view('salons');
  }

  public function salonSubmit(Request $request)
  {
    $data = new salon();

    if ($request->file('image')) {
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();

      $file->move(public_path('image'), $filename);
      $data['image'] = $filename;

    }
    dd($filename);
    $data->name = $request->name;
    $data->google = $request->google;
    $data->facebook = $request->facebook;
    $data->about = $request->about;
    $data->opening_hours = $request->hours;

    $imgArr = [];
    for ($i = 1; $i < 5; $i++) {
      if ($request->has('image' . $i . '')) {
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
      if ($request->has('img' . $i . '')) {
        array_push($image, $i);
      } else {
        array_push($image, "0");
      }
    }
    //dd($imgArr);

    $imgs = implode(',', $image);
    $data->payment = $imgs;

    $data->packages = $request->packages;
    $data->pricelist = $request->pricelist;
    $data->gift = $request->gift;
    $data->map = $request->map;
    $data->booking_button = $request->link;
    //dd($data);
    $data->save();
    return redirect('/salon-view');
  }

  public function salonView()
  {
    $data = salon::all();
    return view('view-salons', compact('data'));
  }

  public function salonDelete($id)
  {
    $data = salon::find($id);
    $data->delete();
    return redirect('/salon-view');
  }

  public function salonEdit($id)
  {
    $data = salon::find($id);
    return view('edit-salons', compact('data'));
  }

  public function salonUpdate(Request $req)
  {
    $data = salon::find($req->salonid);

    if ($req->file('image')) {
      $file = $req->file('image');
      $filename = date('YmdHi') . $file->getClientOriginalName();

      $file->move(public_path('image'), $filename);
      $data['image'] = $filename;

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
    $data->booking_button = $req->link;
    // dd($data);
    $data->update();
    return redirect('/salon-view');
  }

  // public function testimonial()
  // {
  //   return view('testim');
  // }

  // public function testimsubmit(Request $request)
  // {
  //   $data = new Testimmodel();

  //   $data->textarea = $request->textarea;

  //   $data->save();
  //   return redirect('/view-testim');
  // }

  // public function viewTestim()
  // {

  //   $data = Testimmodel::all();
  //   //dd($data);

  //   return view('view-testim', compact('data'));
  // }


  // function deleteTestim($id)
  // {
  //   $data = Testimmodel::find($id);

  //   // dd('image/'.$data->image);


  //   $data->delete();

  //   return redirect('view-testim');
  // }


  // function editTestim($id)
  // {
  //   //dd($id);
  //   $data = Testimmodel::find($id);
  //   return view('edit-testim', compact('data'));
  // }

  // function updateTestim(Request $req)
  // {
  //   //dd($req->id);
  //   $data = Testimmodel::find($req->id);
  //   //dd($data);



  //   $data->textarea = $req->textarea;

  //   $data->update();s

  //   return redirect('edit-testim/' . $req->id);

  // }

  // //treatment

  public function treatmentFunction()
  {
    return view('/treatment');
  }

  public function treatmentSubmit(Request $request)
  {
    $data = new Treatmentmodel();
    $data->category = $request->category;
    $data->headline = $request->headline;


    if ($request->file('image1')) {
      $file1 = $request->file('image1');
      $filename = date('YmdHi') . $file1->getClientOriginalName();
      // dd($filename);
      $file1->move(public_path('image'), $filename);
      $data['image1'] = $filename;

    }

    $data->treatment = $request->treatment;
    $data->description = $request->desc;
    $data->benefit = $request->benefit;
    $data->faq = $request->faq;
    $data->save();

    if ($request->file('image2')) {
      foreach ($request->file('image2') as $img) {


        //$file2= $request->file($img);
        //dd($img->getClientOriginalName());
        $filename = date('YmdHi') . $img->getClientOriginalName();

        $img->move(public_path('image'), $filename);
        $data->getGallery()->create(['treatment_id' => $data->id, 'gallery' => $filename]);
      }
    }



    return redirect('/view-treatment');

  }

  public function viewTreatment()
  {
    $data = Treatmentmodel::with('getGallery')->get();
    //dd($data);
    return view('view-treatment', compact('data'));
  }

  function deleteTreatment($id)
  {
    $data = Treatmentmodel::find($id);

    $data->delete();

    return redirect('/view-treatment');

  }

  function editTreatment($id)
  {
    $data = Treatmentmodel::find($id);
    $gallery = Treatmentmodel::find($id)->getGallery;
    return view('/edit-treatment', compact('data', 'gallery'));
  }


  public function updateTreatment(Request $req)
  {
    //dd($req->image4->getClientOriginalName());
    $data = Treatmentmodel::find($req->id);
    $gallery = Treatmentmodel::find($req->id)->getGallery;
    //dd($gallery[1]->id);

    //dd($req->file('image')->getClientOriginalName());
    for ($i = 0; $i < count($gallery); $i++) {
      if ($req->has('image' . $gallery[$i]->id . '')) {
        unlink('image/' . $gallery[$i]->gallery);
        $file2 = $req->file('image' . $gallery[$i]->id . '');
        //dd($file2);
        $filename2 = date('YmdHi') . $file2->getClientOriginalName();
        //dd($filename2);
        $file2->move(public_path('image'), $filename2);
        Gallerymodel::find($gallery[$i]->id)->update(['treatment_id' => $gallery[$i]->id, 'gallery' => $filename2]);
      }

    }

    if ($req->file('image1')) {
      if (file_exists(public_path() . '/image/' . $data->image1)) {
        unlink('image/' . $data->image1);



        $file1 = $req->file('image1');
        $filename = date('YmdHi') . $file1->getClientOriginalName();

        $file1->move(public_path('image'), $filename);
        $data['image1'] = $filename;
      }
    }


    $data->category = $req->category;
    $data->headline = $req->headline;
    $data->treatment = $req->treatment;

    $data->description = $req->desc;
    $data->benefit = $req->benefit;
    $data->faq = $req->faq;


    $data->update();
    return redirect('edit-treatment/' . $req->id);

  }

  //offers


  public function offersFunction()
  {
    return view('/offers');
  }

  public function offerSubmit(Request $request)
  {
    $data = new Offer();
    $data->branch = $request->branch;
    $data->offers = $request->offers;
    $data->price = $request->price;

    $data->save();
    return redirect('/view-offers');

  }

  public function viewOffers()
  {
    $data = Offer::all();
    return view('/view-offers', compact('data'));
  }

  function deleteOffers($id)
  {
    $data = Offer::find($id);
    $data->delete();
    return redirect('/view-offers');

  }

  function editOffers($id)
  {
    $data = Offer::find($id);
    return view('/edit-offers', compact('data'));
  }

  function updateOffers(request $req)
  {
    $data = Offer::find($req->id);
    $data->offers = $req->offers;
    $data->price = $req->price;

    $data->update();
    return redirect('/view-offers');
  }


}