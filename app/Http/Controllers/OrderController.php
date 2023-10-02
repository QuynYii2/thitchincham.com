<?php

namespace App\Http\Controllers;

use App\Enums\OrderItemStatus;
use App\Enums\OrderStatus;
use App\Models\Config;
use App\Models\Information;
use App\Models\Order;
use App\Models\OrderItem;

use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
                'menu_id' => $menu,
                'status' => OrderStatus::WAIT_PAYMENT,
            ];

            $oldOrder = Order::where('information_id', $info_id)
                ->where('status', OrderStatus::WAIT_PAYMENT)
                ->where('menu_id', $menu)
                ->latest('created_at')
                ->first();

            if (!$oldOrder) {
                $oldOrder = Order::create($order);
            }

            $orderItem = [
                'order_id' => $oldOrder->id,
                'quantity' => $quantity,
                'menu_id' => $menu,
                'price' => $price,
                'status' => OrderItemStatus::ACTIVE,
            ];

            $oldOrderItem = OrderItem::where('order_id', $oldOrder->id)
                ->where('menu_id', $menu)
                ->first();

            if (!$oldOrderItem) {
                OrderItem::create($orderItem);
            } else {
                $oldOrderItem->quantity += $quantity;
                $oldOrder->total += $total;
                $oldOrder->save();
                $oldOrderItem->save();
            }

            $configs = Config::all();

            (new SendMailController())->sendEmail($configs[0]->email, 'thitchincham@gmail.com', 'Có đơn hàng mới được order', 'Có đơn hàng mới được order');

            Cookie::queue(Cookie::forget('information_id'));
            alert()->success('Thành công', 'Đặt đơn hàng thành công');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Có lỗi xảy ra!', 'Không thể đặt đơn, vui lòng thử lại sau...');
            return back();
        }
    }
}
