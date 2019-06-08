<?php

namespace App\Http\Controllers\Products;

use App\Http\Responses\HttpResponse;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Tags;
use App\Products;


class ProductsController extends Controller
{
    //
    //        all()->toArray();

    public function index(){
        $products = Products::with('tags','categories')->get()->toArray();
        $data = [
            'products' => $products,
        ];
        return HttpResponse::success($data, 'Get successfully');
    }
}
