<?php

namespace App\Http\Controllers\Categories;

use App\Http\Responses\HttpResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    //
    public function index(){
        $categories = Categories::distinct()->get('categories')->toArray();
        $data = [
            'categories' => $categories,
        ];
        return HttpResponse::success($data, 'Get successfully');
    }
}
