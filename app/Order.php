<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    Protected $table = 'order';

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function delivery(){
        return $this->belongsTo('App\Delivery');
    }

    public function lineItem(){
        return $this->hasMany('App\LineItem','OrderId','orderId');
    }

    public function order_delivery_status(){
        return $this->hasMany('App\Delivery','delivery_id','delivery_id');
    }

    public function orders(){
        return $this->hasMany('App\User','user_id','id');
    }
    Protected $fillable = [
        'user_id',
        'orderId',
        'delivery_id',
        'created_at',
        'updated_at'
    ];
}
