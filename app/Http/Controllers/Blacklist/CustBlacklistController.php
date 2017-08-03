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
        return view('session.custBlacklisting');
    }
    //
}
