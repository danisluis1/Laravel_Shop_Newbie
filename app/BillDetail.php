<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_detail';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    public function product() {
        $this->belongsTo('App\Product','id_product','id');
    }

    public function bill() {
        $this->belongsTo('App\Bill','id_bill','id');
    }
}
