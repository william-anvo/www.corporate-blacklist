<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function __construct() {
        $this->middleware('admin',['except' => 'doLogout']);
    }    
    //
    public function showAddBlackList(){
        
        return view('session.admin.showAddBlackList');
    } 

    public function showDashboard(){
        
        return view('session.admin.dashboard');
    } 

    public function doAddBlackList(Request $request){
        
//dd($request->all());

        $this->validate(request(), [
            'bankcard_no' => 'required|digits_between:15,20|unique:blacklist',
            'bank_name' => 'required|integer|between:25,40',
            'holder_name' => 'max:50',
        ]);
        
dd($request->all());

        //Create and Save
////        dd(request('name'));
//        Blacklist::create([
//                    'bankcard_no' => request('bankcard_no'),
//                    'bank_name' => request('bank_name'),
//                    'holder_name' => request('holder_name'),
//                    'creator' => Auth::user()->division, 
//                    'update_at' => $now, 
//                    'create_at' => $now, 
//        ]);
        
        \Session::flash('flash_message','资料已保存');
        return view('session.admin.showAddBlackList');
    } 
    
    
}
