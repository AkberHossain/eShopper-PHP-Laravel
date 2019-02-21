<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\Order_detail;

class OrderlistController extends Controller
{

    public function showOrderDetails($id)
    {
        $order = Order::findOrFail($id);

        $shipping_info = Shipping::where('order_id' , $id)->first();

        $ordered_products = Order_Detail::where('order_id' , $id)->get();

        $compact = compact('order' , 'shipping_info' , 'ordered_products');

        return view('admin-panel.order-list.order_details' , $compact);
    }

    public function changeOrderModifyStatus(Request $request , $id)
    {
        $order = Order::findOrFail($id);

        $order->status = $request->status;

        $order->save();

        return redirect()->route('admin.orderlist');
    }

    public function showOrderList()
    {
        $orders = Order::all();

        $status = 3;

        $compact = compact('orders' , 'status');

        return view('admin-panel.order-list.allOrderList' , $compact);
    }

    public function userOrderList($user_id)
    {
        $orders = Order::where('user_id' , $user_id)->get();

        $status = 3;

        $compact = compact('orders' , 'status');

        return view('admin-panel.users.user_order_list' , $compact);
    }

    public function showOrderModify($id)
    {
        $order = Order::findOrFail($id);

        $shipping_info = Shipping::where('order_id' , $id)->first();

        $ordered_products = Order_Detail::where('order_id' , $id)->get();

        $compact = compact('order' , 'shipping_info' , 'ordered_products');

        return view('admin-panel.order-list.order_modify_form' , $compact);
    }

    public function showOrderListByID(Request $request)
    {

        $status = 3;

        $orders = Order::find($request->search_id);

        if($orders)
            $orders = $orders->get();

        $compact = compact('orders' , 'status');

        return view('admin-panel.order-list.allOrderList' , $compact);
    }

    public function showOrderListByID_forusercontrol(Request $request,$user_id)
    {

        $status = 3;

        $orders = Order::find($request->search_id);

        $user_order = $orders->where('user_id' , $user_id);

        if($user_order)
            $orders = $user_order->get();

        $compact = compact('orders' , 'status');

        return view('admin-panel.users.user_order_list' , $compact);
    }

    public function showOrderListByStatus($status)
    {

        if($status == 3 ){
            $orders = Order::all();

            $compact = compact('orders' , 'status');

            return view('admin-panel.order-list.allOrderList' , $compact);
        }
        else{
            $orders = Order::where('status' , $status)->get();

            $compact = compact('orders' , 'status');

            return view('admin-panel.order-list.allOrderList' , $compact);
        }
    }


    public function showOrderListByStatus_forusercontrol($status,$user_id)
    {

        if($status == 3 ){
            $orders = Order::where('user_id' , $user_id);

            $compact = compact('orders' , 'status');

            return view('admin-panel.users.user_order_list' , $compact);
        }
        else{
            $orders = Order::where('status' , $status)->where('user_id' , $user_id)->get();

            $compact = compact('orders' , 'status');

            return view('admin-panel.users.user_order_list' , $compact);
        }
    }
    
}
