<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    Protected $table = 'delivery_list';

    protected $guarded = ['delivery_id', 'created_at', 'updated_at'];

    public function delivery_Order(){
        return $this->belongsTo('App\Order');
    }

    Protected $fillable = [
        'delivery_id',
        'deliveryStatus',
        'created_at',
        'updated_at'
    ];
}
