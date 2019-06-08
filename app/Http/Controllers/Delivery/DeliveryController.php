<?php

namespace App\Http\Controllers\Delivery;

use Illuminate\Http\Request;
use App\Http\Responses\HttpResponse;
use App\Delivery;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    //
    public function update(Request $request, $delivery_id){
        $delivery = Delivery::where('delivery_id', $delivery_id)->update([
            'deliveryStatus' => $request->status,
        ]);
        return HttpResponse::success();
    }
}
