<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Contains;
use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', '!=', OrderStatus::DELETED)->orderBy('id', 'desc')->get();
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
            alert()->success('Thành công', 'Lưu đơn hàng thành công');
            return redirect(route('admin.show.all.orders'));
        } catch (\Exception $exception) {
            alert()->error('Thất bại', 'Không thể sửa đơn hàng');
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
            alert()->success('Thành công', 'Xóa đơn hàng thành công');
            return redirect(route('admin.show.all.orders'));
        } catch (\Exception $exception) {
            alert()->error('Thất bại', 'Không thể xóa đơn hàng');
            return back();
        }
    }

    public function syncOrder(Request $request)
    {
        try {
            $client = new Google_Client();
            $client->setClientId(Contains::GOOGLE_SHEETS_CLIENT_ID);
            $client->setClientSecret(Contains::GOOGLE_SHEETS_CLIENT_SECRET);
            $client->setRedirectUri(Contains::GOOGLE_SHEETS_REDIRECT);

            $client->addScope([
                Google_Service_Sheets::SPREADSHEETS
            ]);

            $service = new Google_Service_Sheets($client);

            $spreadsheetId = '1-E5TOMuW1BlENRdheiG4-T_nJqX4Y0rXoxTfTcn4PpU';

            $range = 'Sheet1!A1';

            $values = [];

            $orders = Order::where('status', '!=', OrderStatus::DELETED)->orderBy('id', 'desc')->get();

            foreach ($orders as $order) {
                $values[] = [$order->column1, $order->column2, $order->column3];
            }

            $body = new Google_Service_Sheets_ValueRange([
                'values' => $values
            ]);

            $params = [
                'valueInputOption' => 'RAW'
            ];

            $result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);

            alert()->success('Thành công', 'Đồng bộ đơn hàng thành công');
            return back();
        } catch (\Exception $exception) {

            alert()->error('Thất bại', 'Đã có lỗi xảy ra');
            return back();
        }
    }
}
