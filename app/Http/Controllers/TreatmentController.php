<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use App\Models\Category;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $category = Category::all();
        //$data = Treatment::all();
        $data = Treatment::all();
        //dd($category_name[0]->category->name);
        return view('treatment.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Treatment();

        if ($request->file('coverImg')) {
            $file1 = $request->file('coverImg');
            $filename1 = date('YmdHi') . $file1->getClientOriginalName();
            $file1->move(public_path('image/treatment/'), $filename1);
            $data['image'] = $filename1;
        }
        if ($request->file('galImg1')) {
            $file2 = $request->file('galImg1');
            $filename2 = date('YmdHi') . $file2->getClientOriginalName();
            $file2->move(public_path('image/treatment/'), $filename2);
            $data['galImg1'] = $filename2;
        }
        if ($request->file('galImg2')) {
            $file3 = $request->file('galImg2');
            $filename3 = date('YmdHi') . $file3->getClientOriginalName();
            $file3->move(public_path('image/treatment/'), $filename3);
            $data['galImg2'] = $filename3;

        }
        if ($request->file('aftercareimage')) {
            $file1 = $request->file('aftercareimage');
            $filename = date('YmdHi') . $file1->getClientOriginalName();
            $file1->move(public_path('image/treatment/'), $filename);
            $data['aftercareimage'] = $filename;
        }
        
        $data->headline = $request->name;
        $data->treatment = $request->title;
        $data->description = $request->description;
        $data->benefit = $request->benefits;
        $data->treatment_journey = $request->journey;
        $data->pre_post_treatment = $request->pre_post;
        $data->treatable_area = $request->area;
        $data->faq = $request->faq;
        $data->disPacks = $request->disPacks;
        $data->bkngLink = $request->bookingBtn;
        $data->aftercare_note=$request->aftercare_note;
       //dd($data);
        $data->save();

        return redirect()->route('admin.treatments.index');
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
        $data = Treatment::find($id);
        return view('treatment.edit', compact('data'));
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
        $data = Treatment::find($id);

    if ($req->file('coverImg')) {
      $file1 = $req->file('coverImg');
      $filename1 = date('YmdHi') . $file1->getClientOriginalName();
      $file1->move(public_path('image/treatment/'), $filename1);
      $data->image = $filename1;
    }

    if ($req->file('galImg1')) {
      $file2 = $req->file('galImg1');
      $filename2 = date('YmdHi') . $file2->getClientOriginalName();
      $file2->move(public_path('image/treatment/'), $filename2);
      $data->galImg1 = $filename2;
    }

    if ($req->file('galImg2')) {
      $file3 = $req->file('galImg2');
      $filename3 = date('YmdHi') . $file3->getClientOriginalName();
      $file3->move(public_path('image/treatment/'), $filename3);
      $data->galImg2 = $filename3;
    }
    if ($req->file('aftercareimage')) {
        $file1 = $req->file('aftercareimage');
        $filename = date('YmdHi') . $file1->getClientOriginalName();
        $file1->move(public_path('image/treatment/'), $filename);
        $data['aftercareimage'] = $filename;
    }

    $data->headline = $req->name;
    $data->treatment = $req->title;
    $data->description = $req->description;
    $data->benefit = $req->benefits;
    $data->treatment_journey = $req->journey;
    $data->pre_post_treatment = $req->pre_post;
    $data->treatable_area = $req->area;
    $data->faq = $req->faq;
    $data->disPacks = $req->disPacks;
    $data->bkngLink = $req->bookingBtn;
    $data->aftercare_note=$req->aftercare_note;
//dd($data);
    $data->update();
    return redirect()->route('admin.treatments.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Treatment::find($id);
        $data->delete();
        return back();
    }
}