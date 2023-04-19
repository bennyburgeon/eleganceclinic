<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Award::all();
    return view('awards.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('awards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'award'=>'required',
            'year'=> 'required'
        ]);
        $data=new Award();
        if ($request->file('image')) {
          $file = $request->file('image');
          $filename = date('YmdHi') . $file->getClientOriginalName();
    
          $file->move(public_path('image/awards'), $filename);
          $data['image'] = $filename;
    
        }
        //dd($file);
        $data->name=$request->name;
        $data->awarded_by=$request->award;
        $data->year=$request->year;
        //dd($data);
        $data->save();
        return  redirect()->route('admin.awards.index');
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
        $data=Award::find(decrypt($id));
        return view('awards.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'=>'required',
            'award'=>'required',
            'year'=> 'required'
        ]);
        
        $data=Award::find($id);
        if ($request->file('image')) {
          $file = $request->file('image');
          $filename = date('YmdHi') . $file->getClientOriginalName();
      
          $file->move(public_path('image/awards'), $filename);
          $data->image = $filename;
      
        }
        //dd($filename);
        $data->name=$request->name;
        $data->awarded_by=$request->award;
        $data->year=$request->year;
        //dd($data);
        $data->update();
        return  redirect()->route('admin.awards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Award::find(decrypt($id));
        $data->delete();
        return redirect()->route('admin.awards.index');
    }
}
