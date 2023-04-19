<?php

namespace App\Http\Controllers;
use App\Models\Career;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Career::all();
    return view('career.view',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Career();
        $data->title=$request->title;
        $data->vaccancy=$request->vaccancy;
        $data->location=$request->location;
        $data->qualification=$request->qualification;
        $data->experience=$request->experience;
        $data->skills=$request->skills;
        $data->payment=$request->payment;
        $data->time=$request->time;
        $data->description=$request->description;
        //dd($data);
        $data->save();
        return redirect()->route('admin.careers.index');
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
        $data=Career::find(decrypt($id));
        return view('career.edit',compact('data'));
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
        $data=Career::find($id);

        $data->title=$request->title;
        $data->vaccancy=$request->vaccancy;
        $data->location=$request->location;
        $data->qualification=$request->qualification;
        $data->experience=$request->experience;
        $data->skills=$request->skills;
        $data->payment=$request->payment;
        $data->time=$request->time;
        $data->description=$request->description;
//dd($data);
        $data->update();
        return redirect()->route('admin.careers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Career::find(decrypt($id));
        $data->delete();
        return redirect()->route('admin.careers.index');
    }
}
