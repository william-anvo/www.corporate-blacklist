<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustBlacklist extends Model
{
    public $table = "cust_blacklist";
    //
    protected $fillable = [
        'bankcard_no',
        'bank_name',
        'card_area',
        'holder_name',
        'card_type',
        'remark',
        'creator',
        'division'
        ];
    
//    public function CustBlacklist(){
//        return $this->belongsTo('\App\CustBlacklist');
//    }
}
