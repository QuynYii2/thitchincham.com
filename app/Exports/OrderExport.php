<?php

namespace App\Exports;

use App\Enums\OrderStatus;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;

class OrderExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        $orders = Order::where('status', '!=', OrderStatus::DELETED)->get();

        $result = new Collection();
        $column = [
            'Orders Name',
            'Orders PhoneNumber',
            'Orders Email',
            'Orders Address',
            'Menu',
            'Price',
            'Quantity',
            'Total',
            'Status',
            'Create At'];
        $result->push($column);
        foreach ($orders as $order) {
            $orderItem = OrderItem::where('order_id', $order->id)->first();
            $menu = Menu::find($orderItem->menu_id);

            $item = [
                'Orders Name' => $order->information->fullName,
                'Orders PhoneNumber' => $order->information->phoneNumber,
                'Orders Email' => $order->information->email,
                'Orders Address' => $order->information->address,
                'Menu' => $menu->name,
                'Price' => $orderItem->price,
                'Quantity' => $orderItem->quantity,
                'Total' => $order->total,
                'Status' => $order->status,
                'Create At' => $order->created_at,
            ];
            $result->push($item);
        }

        return $result;
    }

}
