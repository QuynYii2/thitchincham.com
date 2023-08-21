<?php

namespace App\Http\Controllers;

use App\Enums\OrderItemStatus;
use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        try {
            $info_id = $_COOKIE['information_id'];
            $quantity = $request->input('quantity');
            $price = $request->input('price');
            $menu = $request->input('menu_id');

            $total = $quantity * $price;
            $order = [
                'information_id' => $info_id,
                'total' => $total,
                'status' => OrderStatus::WAIT_PAYMENT,
            ];

            Order::create($order);
            $oldOrder = Order::where('information_id', $info_id)->orderBy('created_at', 'desc')->first();
            $order_item = [
                'order_id' => $oldOrder->id,
                'quantity' => $quantity,
                'menu_id' => $menu,
                'price' => $price,
                'status' => OrderItemStatus::ACTIVE,
            ];
            OrderItem::create($order_item);
            return back();
        } catch (\Exception $exception) {
            return back();
        }
    }
}
