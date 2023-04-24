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
        $category = Category::all();
        //$data = Treatment::all();
        $data = Treatment::with('category')->get();
        //dd($category_name[0]->category->name);
        return view('treatment.view',compact('category','data'));
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
        $data->faq = $request->faq;
        $data->disPacks = $request->disPacks;
        $data->bkngLink = $request->bookingBtn;
        $data->aftercare_description=$request->aftercare_description;
        $data->aftercare_note=$request->aftercare_note;
       // dd($data);
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
        $category = Category::all();
        $data = Treatment::with('category')->find($id);
        return view('treatment.edit', compact('category', 'data'));
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
      $file1->move(public_path('image/salon/'), $filename1);
      $data->image = $filename1;
    }

    if ($req->file('galImg1')) {
      $file2 = $req->file('galImg1');
      $filename2 = date('YmdHi') . $file2->getClientOriginalName();
      $file2->move(public_path('image/salon/'), $filename2);
      $data->galImg1 = $filename2;
    }

    if ($req->file('galImg2')) {
      $file3 = $req->file('galImg2');
      $filename3 = date('YmdHi') . $file3->getClientOriginalName();
      $file3->move(public_path('image/salon/'), $filename3);
      $data->galImg2 = $filename3;
    }
    if ($req->file('aftercareimage')) {
        $file1 = $req->file('aftercareimage');
        $filename = date('YmdHi') . $file1->getClientOriginalName();
        $file1->move(public_path('image/treatment/'), $filename);
        $data['aftercareimage'] = $filename;
    }

    $data->category_id = $req->category;
    $data->headline = $req->name;
    $data->treatment = $req->title;
    $data->description = $req->description;
    $data->benefit = $req->benefits;
    $data->faq = $req->faq;
    $data->disPacks = $req->disPacks;
    $data->bkngLink = $req->bookingBtn;
    $data->aftercare_description=$req->aftercare_description;
    $data->aftercare_note=$req->aftercare_note;
//DD($data);
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