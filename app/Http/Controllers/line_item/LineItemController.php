<?php

namespace App\Http\Controllers\line_item;

use App\LineItem;
use App\Order;
use App\Delivery;
use App\Http\Responses\HttpResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LineItemController extends Controller
{
    //
    public function index(){
        $line_item = LineItem::with('product')->get()->toArray();
        $order_id = LineItem::distinct()->get('OrderId')->toArray();

        $data = [
            'orders' => $line_item,
            'Order_ids' => $order_id
       ];
        return HttpResponse::success($data, 'Get successfully');
    }

    public function store(Request $request)
    {
        $all = $request->toArray();
        $res = $all[0]['line'];
        $orderRes = $all[0]['order'];
        $deliveryRes = $all[0]['delivery'];

        LineItem::insert($res);
        Order::insert($orderRes);
        Delivery::insert($deliveryRes);
        return HttpResponse::success();
    }


}
