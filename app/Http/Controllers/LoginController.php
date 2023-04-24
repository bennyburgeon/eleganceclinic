<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function savetodb(Request $request) { 
    	$data = new Admin; 
    	$data->username = $request->username; 
    	$data->password = Hash::make($request->password); 
    	$data->save(); 
    }

    public function index() {
    	return view('admin-login');
    }

    public function authenticate(Request $request) { 
    	if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) 
    	{ 
    		$request->session()->regenerateToken(); 
    		return redirect()->route('admin.view.banner');
    	} 
    		return back()->withErrors(['failed'=>"Invalid username/password!"]); 
    	}

    	public function logout(Request $request) {
			Auth::logout(); 
			$request->session()->invalidate(); 
			$request->session()->regenerateToken(); 
			return redirect('/admin/login'); 
			}
}
