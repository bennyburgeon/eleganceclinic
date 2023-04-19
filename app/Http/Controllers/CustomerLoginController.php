<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Carbon\Carbon;
class CustomerLoginController extends Controller
{
    public function login(){
      return view('web.customer-login');
    }
    public function checkLogin(Request $req){
        $this->validate($req, [
          'username' => 'required',
          'password' => 'required',
        ]);
        $checkExistUser = Customer::where('username',$req->username)->first();
        if($checkExistUser){
          $checkVerifiedUser = Customer::where('username',$req->username)->first();
          if($checkVerifiedUser){
            $existPassword = $checkVerifiedUser->password;
            if (Hash::check($req->password, $existPassword)) {
              Auth::guard('customer')->login($checkVerifiedUser);
              return redirect()->route('customer.portal')->with('message','Login Success');
            } else {
              return redirect()->route('login')->with('error','Invalid Password, Please try to login again');
            }
          }else{
            return redirect()->route('otp.login')->with('error','User Not Verified');
          }
        }else{
          return redirect()->route('login')->with('error','Invalid Username, Please try to login again');
        }
    }
    public function logout(){
      Auth::guard('admin')->logout();
      return redirect()->route('login')->with('message','Successfully Logged Out!!');
    }

}
