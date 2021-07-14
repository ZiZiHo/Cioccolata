<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'product_type_id', 'price','unit','photo','ingredient','weight','EXP','temp','remark','sort'
    ];

    public function productType()
    {
        return $this->belongsTo('App\ProductType','product_type_id' , 'id');
    }
}
