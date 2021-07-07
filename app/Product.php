<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'product_type_id', 'price','unit','photo','ingredient','weight','EXP','temp','remark','sort'
    ];
}
