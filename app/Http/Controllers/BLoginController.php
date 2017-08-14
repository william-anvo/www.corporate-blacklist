<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DateTime;
//use Illuminate\Foundation\Auth;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BLoginController extends Controller {

    public function __construct() {
        $this->middleware('guest',['except' => 'doLogout']);
    }

    public function showLogin() {
        return view('session.login');
    }

    public function doLogin(Request $request) {
        //auth USER
//dd(request()->name);
//request()->merge(array('name' => strtoupper(request()->name)));        
        if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password'), 'acc_status' => '1'], true)) {            //auth USER  // true || false
            auth()->user()->updated_at = new DateTime();
            auth()->user()->save();

            $isadmin = Auth::user()->is_admin;                           // 1 || 0

            if ($isadmin == '1') {        //is active
                return view('session.admin.dashboard');
            } else {
                return redirect()->home();
            }
            auth()->logout();
        \Session::flush();            
            return back()->withErrors(['message' => '101 Error.']);
        } else {
            auth()->logout();
        \Session::flush();            
            return back()->withErrors(['message' => '登录失败。用户名或密码错误  |  These credentials do not match our records']);
        }
    }

    public function doLogout() {
        auth()->logout();
        \Session::flush();
//        return redirect()->route('blogin');
        return redirect(\URL::previous());
    }    
}
