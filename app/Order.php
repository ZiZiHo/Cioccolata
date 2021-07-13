<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'order_no', 'name', 'phone', 'email', 'county', 'district', 'zipcode', 'address', 'invoice' ,'price', 'pay_type', 'shipping', 'shipping_fee', 'shipping_status_id', 'order_status_id'
    ];

    public function details()
    {
        return $this->hasmany('app\order_detail' , 'order_id' , 'id');
    }
}
