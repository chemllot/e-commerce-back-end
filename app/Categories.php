<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';

    protected $guarded = ['CategoriesId', 'categories', 'created_at', 'updated_at'];

    public function categories(){
        return $this->belongsTo('App\Products');
    }
}
