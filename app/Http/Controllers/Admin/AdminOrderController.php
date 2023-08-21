<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', '!=', OrderStatus::DELETED)->get();
        return view('admin.orders.list', compact('orders'));
    }

    public function detail($id)
    {
        $order = Order::find($id);
        if (!$order || $order->status == OrderStatus::DELETED) {
            return redirect(route('not.found'));
        }
        $orderItem = OrderItem::where('order_id', $id)->first();
        $menu = Menu::find($orderItem->menu_id);
        return view('admin.orders.detail', compact('order', 'menu', 'orderItem'));
    }

    public function update(Request $request, $id)
    {
        try {
            $order = Order::find($id);
            if (!$order || $order->status == OrderStatus::DELETED) {
                return redirect(route('not.found'));
            }
            $order->status = $request->input('status');
            $order->save();
            return redirect(route('admin.show.all.orders'));
        } catch (\Exception $exception) {
            return back();
        }
    }

    public function delete($id)
    {
        try {
            $order = Order::find($id);
            if (!$order || $order->status == OrderStatus::DELETED) {
                return redirect(route('not.found'));
            }
            $order->status = OrderStatus::DELETED;
            $order->save();
            return redirect(route('admin.show.all.orders'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
