<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    // Hiển thị toàn bộ đơn hàng
    function index()
    {
        return view('admin.order.index');
    }
}
