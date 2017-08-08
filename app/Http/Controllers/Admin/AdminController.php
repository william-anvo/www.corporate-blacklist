<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use App\CustBlacklist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    
    public function __construct() {
        $this->middleware('admin',['except' => 'doLogout']);
    }    
//
    public function showCustBlacklistForm(){
        
        return view('session.admin.showAddBlackList');
    } 

    public function addCustBlacklistAct(Request $request){
        
// dd();  
        $this->validate(request(), [
//            'bankcard_no' => 'required|regex:/^\d{15,20}$/|unique:cust_blacklist,division = '.Auth::user()->division.',bankcard_no',
            'bankcard_no' => 'required|regex:/^\d{15,20}$/|unique:cust_blacklist',
            'bank_name' => 'required|string',
            'card_area' => 'nullable|string',
            'holder_name' => 'nullable|string',
            'card_type' => 'nullable|string',
            'remark' => 'nullable|string',
        ]);
// dd($request->all());       
        //Create and Save

        CustBlacklist::create([
                    'bankcard_no' => request('bankcard_no'),
                    'bank_name' => request('bank_name'),
                    'card_area' => request('card_area'),
            
                    'holder_name' => request('holder_name'),
                    'card_type' => request('card_type'),
      
                    'division' => Auth::user()->division, 
                    'creator' => Auth::user()->name, 
                    'remark' => request('remark'), 
                    'update_at' => new DateTime(), 
                    'create_at' => new DateTime(), 
        ]);
        
//        \Session::flash('flash_message','资料已保存');
//        return view('session.custBlacklisting');
        return Redirect::to('/custblacklist')->with('message', '资料已保存');

    } 
    
    
}
