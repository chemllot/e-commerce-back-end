<?php

namespace App\Http\Controllers\Order;

use App\Order;
use App\LineItem;
use App\Http\Responses\HttpResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function index(){
        $orders = Order::with('order_delivery_status')->get()->toArray();
        return $orders;
        $data = [
            'orders' => $orders
        ];
        return HttpResponse::success($data, 'Get successfully');
    }


    public function store(Request $request)
    {

        Order::create([
            'user_id' =>$request->userId,
            'delivery_id' =>$request->deliveryId,
        ]);

        return HttpResponse::success();
    }
}
