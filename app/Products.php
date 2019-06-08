<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    Protected $table = 'Products';

    public function tags(){
        return $this->hasMany('App\Tags','ProductsId','ProductsId');
    }

    public function categories(){
        return $this->hasMany('App\Categories','ProductsId','ProductsId');
    }

    public function lineItem()
    {
        return $this->belongsTo('App\LineItem');
    }

    Protected $fillable = [
        'ProductsName',
        'Description',
        'UnitPrice',
        'Stock',
    ];
}
