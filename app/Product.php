<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function product_type() {
        return $this->belongsTo('App\ProductType','id_type','id');
    }

    public function product_bill() {
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
