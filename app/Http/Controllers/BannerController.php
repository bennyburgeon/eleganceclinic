<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{  
    public function dashboard(){
      return view('dashboard');
    }
    public function newBanner(){
      return view('banner');
    }
    public function storeBanner(Request $request){
      $request->validate([
        'title_main' => 'required',
        'title_sub' => 'required',
        'title_button' => 'required',
        'button_link' => 'required'
      ]);
      if ($request->file('image')) {
        $file = $request->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('image/banner'), $filename);
        
      }
      $data = new Banner();
      $data->title_main = $request->title_main;
      $data->title_sub = $request->title_sub;
      $data->title_para = $request->title_para;
      $data->button_title = $request->title_button;
      $data->button_link = $request->button_link;
      $data->image = $filename;
      // dd($data);
  
      $data->save();
      return redirect()->route('admin.view.banner');
  
    }
    public function viewbanner()
    {
      $imageData = Banner::all();
      $imgdta=Banner::all();
      return view('banner.view-banner', compact('imageData','imgdta'));
    }
  
  
    function UpdateBanner(Request $req,$id)
    {
      //dd($req->id);
      $data = Banner::find($id);
      //dd($data);
  
      //unlink('image/' . $data->image);
      $filename="";
      if ($req->file('image')) {
        $file = $req->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
  
        $file->move(public_path('image/banner'), $filename);
        $image_path=public_path('image/banner/' . $data->image);
        if(file_exists($image_path)){
          unlink($image_path);
      }
        // $data['image'] = $filename;
  
      }
      //dd($req->title_main);
      $data->title_main = $req->title_main;
      //dd($req->title_main);
      $data->title_sub = $req->title_sub;
      $data->title_para = $req->title_para;
      $data->button_title = $req->title_button;
      $data->button_link = $req->button_link;
      if($filename){
        $data->image=$filename;
      }
      //dd($data);
      $data->update();
  
      return redirect()->route('admin.view.banner');
  
    }
  
    function DeleteBanner($id)
    {
      $data = Banner::find($id);
      //$image_path = '/image/banner/' . $data->image;
      $image_path=public_path('image/banner/' . $data->image);
        
      if(file_exists($image_path)){
          unlink($image_path);
      }
      //dd($image_path);
      $data->delete($id);
      return redirect()->route('admin.view.banner');
    }

}
