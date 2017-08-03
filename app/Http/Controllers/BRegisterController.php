<?php

namespace App\Http\Controllers;

use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BRegisterController extends Controller
{
    
    public function __construct() {
        $this->middleware('guest',['except' => 'doLogin']);
    }
    
    public function showReg()
    {
        return view('session.register');
    }
    
    public function createReg() {
        
         $now =new DateTime('now');
//validate
        $this->validate(request(), [
            'name' => 'required|regex:/([A-Z]{3})-([A-Z]*)/|max:100|unique:users',
            'division' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

//Create and Save
//        dd(request('name'));
        User::create([
                    'name' => request('name'),
                    'division' => request('division'),
                    'password' => bcrypt(request('password')),
                    'remark' => 'not-admin',                     
                    'update_at' => $now, // Default not-active
                    'create_at' => $now, // Default not-active
//                    'is_admin' => '0', // Default not-admin
                  // Default not-admin
        ]);

//redirect to dashboard        
    \Session::flash('flash_message','账户资料已保存，请联系 ARD I.T 以进行激活账户');
    return redirect()->route('blogin');
    }

}