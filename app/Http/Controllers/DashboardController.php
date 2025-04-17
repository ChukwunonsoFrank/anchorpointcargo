<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $total_orders = Order::count();
        $most_recent_orders = Order::orderBy('created_at', 'desc')->take(5)->get();
        return view('dashboard', [
            'most_recent_orders' => $most_recent_orders,
            'total_orders' => $total_orders,
        ]);
    }
}
