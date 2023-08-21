<?php

namespace App\Http\Controllers\Admin;

use App\Exports\OrderExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function exportOrder(){
        return Excel::download(new OrderExport(), 'order.xlsx');
    }
}
