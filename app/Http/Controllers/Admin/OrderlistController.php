<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Order;

class OrderlistController extends Controller
{
    public function showOrderList()
    {
        $orders = Order::all();

        $compact = compact('orders');

        return view('admin-panel.order-list.allOrderList' , $compact);
    }

    public function showOrderModify($id)
    {
        $order = Order::findOrFail($id);

        $compact = compact('order');

        return view('admin-panel.order-list.order_modify_form' , $compact);
    }

    public function showOrderListByID(Request $request)
    {

        $orders = Order::find($request->search_id);

        if($orders)
            $orders = $orders->get();

        $compact = compact('orders');

        return view('admin-panel.order-list.allOrderList' , $compact);
    }

    public function showOrderListByStatus($status)
    {
        $orders = Order::where('status' , $status)->get();

        return response()->json($orders);

        // $compact = compact('orders');

        // return view('admin-panel.order-list.allOrderList' , $compact);
    }
    
}
