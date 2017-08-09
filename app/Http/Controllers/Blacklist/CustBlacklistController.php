<?php

namespace App\Http\Controllers\Blacklist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Quotation;

class CustBlacklistController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except' => 'doLogout']);
    }

    public function show() {
        
        $blacklistings = DB::table('cust_blacklist')->where('deleted','0')->orderBy('id', 'asc')->get();
        return view('session.custBlacklisting',compact('blacklistings'));

    }
}
