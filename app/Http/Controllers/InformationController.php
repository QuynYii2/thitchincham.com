<?php

namespace App\Http\Controllers;

use App\Enums\OrderItemStatus;
use App\Enums\OrderStatus;
use App\Models\Config;
use App\Models\Information;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class InformationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $info = [
                'fullName' => $request->input('fullName'),
                'phoneNumber' => $request->input('phoneNumber'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
            ];
            $oldInfo = Information::where([
                ['email', $request->input('email')],
                ['phoneNumber', $request->input('phoneNumber')]
            ])->first();
            if ($oldInfo) {
//                setcookie("information_id", $oldInfo->id, time() + 3600, "/");
                $my_info = $oldInfo;
            } else {
                Information::create($info);
                $newInfo = Information::where('email', $request->input('email'))->orderBy('created_at', 'desc')->first();
//                setcookie("information_id", $newInfo->id, time() + 3600, "/");
                $my_info = $newInfo;
            }

            $info_id = $my_info->id;
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
//            Cookie::queue(Cookie::forget('information_id'));

            alert()->success('Thành công', 'Lưu thành công, tiếp tục đặt hàng...');
            return back();
        } catch (\Exception $exception) {
            dd($exception);
            alert()->error('Thất bại', 'Không thể lưu thông tin, Thử lại sau...');
            return back();
        }
    }
}
