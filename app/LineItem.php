<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
    //
    Protected $table = 'line_item';

    public function products()
    {
        return $this->belongsTo('App\Products');
    }

    public function product(){
        return $this->hasMany('App\Products','ProductsId','ProductsId');
    }

    public function orders()
    {
        return $this->belongsTo('App\Order');
    }

    protected $fillable = [
        'ProductsId','OrderId','id', 'Quantity','created_at','updated_at',
    ];
}
