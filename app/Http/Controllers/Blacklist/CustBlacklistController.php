<?php

namespace App\Http\Controllers\Blacklist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Auth;

class CustBlacklistController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except' => 'doLogout']);
    }

    public function show() {
        
//        $blacklistings = \App\CustBlacklist::with(array('bankcard_no','bank_name','holder_name','division','remark'))
//                ->where('deleted','0')
//                ->orderBy('id','ASC')
//                ->get();
//$blacklistings = DB::table('cust_blacklist')->get();
////        
////        //        dd($blacklistings);
////        return view('session.custBlacklisting',compact('blacklistings'));
//        return $blacklistings;
    }
}
