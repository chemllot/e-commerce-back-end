<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    Protected $table = 'tags';

    protected $guarded = ['tagId', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->belongsTo('App\Products');
    }

//    Protected $fillable = [
//        'ProductsName',
//        'Description',
//        'UnitPrice',
//        'Stock',
//    ];
}
