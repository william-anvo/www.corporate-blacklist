<?php

namespace App\Http\Controllers\Blacklist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//use App\Quotation;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class CustBlacklistController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except' => 'doLogout']);
    }

    public function show() {
        
        
        $blacklistings = DB::table('cust_blacklist')->where('deleted','0')->orderBy('id', 'asc')->paginate(15);
        
        $blacklistings ->setPath('custblacklist');
        
        $skipped = ($blacklistings->currentPage() * $blacklistings->perPage()) - $blacklistings->perPage();
        return view('session.custBlacklisting',compact(['blacklistings','skipped']));

    }
}
