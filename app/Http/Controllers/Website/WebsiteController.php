<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\models\Cart;
use App\models\Order;
use App\models\Shipping;
use App\models\Payment;
use App\models\Order_Detail;
use App\Http\Controllers\Controller;

use DB;

use Carbon\Carbon;

use Session;

class WebsiteController extends Controller
{

    public function checkoutConfirm(Request $request)
    {

        $order = Order::create([
            'date' => Carbon::now()->toDayDateTimeString() ,
            'total_price' => Session::get('cart')->total_price ,
            'user_id' => Session::get('user_id'),
            'status' => 0 ,
        ]);

        $shipping = Shipping::create([
            'name' => $request->name ,
            'address' => $request->address ,
            'phone' => $request->phone ,
            'email' => $request->email ,
            'order_id' => $order->id ,
        ]);

        $payment = Payment::create([
            'payment_method' => $request->payment_method ,
            'payment_status' => 0 ,
            'order_id' => $order->id ,
        ]);

        foreach( Session::get('cart')->products as $product )
        {
            Order_Detail::create([
                'quantity' => $product['qty'] , 
                'product_id' => $product['product']['id'] ,
                'order_id' => $order->id ,
            ]);
        }

        Session::put('cart' , null);

        return redirect()->route('website.index');

    }

    public function checkout()
    {
        if(Session::has('user_id'))
        {
            Session::put('current_status' , null);
            
            return view('website.checkout.payment_shipping_form');
        }
        else
        {   
            Session::put('current_status' , 'checkout');

            return redirect()->route('user.showsignin');
        }
    }

    public function removeCart()
    {
        Session::put('cart' , null);

        return redirect()->route('website.index');
    }

    public function getCart()
    {

        $cart = Session::has('cart') ? Session::get('cart') : null ;

        $compact = compact('cart');

        return view('website.cart.show_cart' , $compact);
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $oldcart = Session::has('cart') ? Session::get('cart') : null ;

        $cart = new Cart($oldcart);

        $cart->add($product , $id);

        Session::put('cart' , $cart);

        return redirect()->back();

    }

    public function productDetails($id)
    {    
        $product = Product::findOrFail($id);

        $compact = compact('product');
        
        return view('website.product.product_details' , $compact);
    }
    
    public function index()
    {
    
        $men_products = DB::table("products")->select('*')

            ->whereIn('id',function($query){

               $query->select('product_id')->from('product_categories')
                    
                    ->whereIn('category_id',function($query){

                            $query->select('id')->from('categories')->where('name' , '=' , 'Men');
                    });

            })

        ->latest()->take(8)->get();


        //$women_products  ->take(8)

        $women_products = DB::table("products")->select('*')

            ->whereIn('id',function($query){

               $query->select('product_id')->from('product_categories')
                    
                    ->whereIn('category_id',function($query){

                            $query->select('id')->from('categories')->where('name' , '=' , 'Women');
                    });

            })
            
        ->latest()->take(8)->get();

        //$bags_products   ->take(8)

        $bag_products = DB::table("products")->select('*')

            ->whereIn('id',function($query){

               $query->select('product_id')->from('product_categories')
                    
                    ->whereIn('category_id',function($query){

                            $query->select('id')->from('categories')->where('name' , '=' , 'Bag');
                    });

            })
            
        ->latest()->take(8)->get();

        //$footwears_products   ->take(8)

        $footwear_products = DB::table("products")->select('*')

            ->whereIn('id',function($query){

               $query->select('product_id')->from('product_categories')
                    
                    ->whereIn('category_id',function($query){

                            $query->select('id')->from('categories')->where('name' , '=' , 'footwear');
                    });

            })
            
        ->latest()->take(8)->get();


        $compact = compact('footwear_products','bag_products', 'women_products','men_products' );

        return view('website.index' , $compact);

    }
}
