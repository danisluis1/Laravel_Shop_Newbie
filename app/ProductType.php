<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'type_products';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    /** One type of product might one or more product  */
    public function product() {
        return $this->hasMany('App\Product','id_type','id');
    }
}

