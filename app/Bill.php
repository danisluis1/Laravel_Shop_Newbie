<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table= 'bills';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function bill_detail() {
        $this->hasMany('App\BillDetail','id_bill','id');
    }

    public function customer() {
        $this->belongsTo('App\Customer','id_customer','id');
    }
}
