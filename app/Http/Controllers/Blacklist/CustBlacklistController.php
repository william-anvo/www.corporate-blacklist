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
        $sumCountRecord = DB::table('cust_blacklist')->where('deleted','0')->orderBy('id', 'asc')->count();
        $blacklistings = DB::table('cust_blacklist')->where('deleted','0')->orderBy('id', 'asc')->paginate(15);

//        $sum = count($blacklistings);
        
//        $blacklistings::paginate(15);
        $blacklistings ->setPath('custblacklist');      // Paganation Cache 

//        dd($sumTotalRecord);
        $skipped = ($blacklistings->currentPage() * $blacklistings->perPage()) - $blacklistings->perPage(); // Paganation Loop Number to nexxt page 
        return view('session.custBlacklisting',compact(['blacklistings','skipped','sumCountRecord']));

    }
}
