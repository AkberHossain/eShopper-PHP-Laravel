@extends('admin-panel.admin-layouts.layout')

@section('page-content')


<div id="page-wrapper">
    <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
                  
                    <br>
                    <h2><b>Order ID:{{$order->id}}</b><h2>
                    <h3>Odred Date:{{$order->date}}</h3>
                    <br>
                    <div>
                            <h2 class="page-title">Modify Order Status</h2> 
                    </div>
                    <br>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" value="0">
                            <label class="form-check-label" for="exampleRadios1">
                                Bkash/Credit Card
                            </label>
                            <input class="form-check-input" type="radio" name="payment_method" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Cash on Delivery
                            </label>
                        </div>
                        <br><br>
                        <h3 class="agileinfo_sign">Shipping Information </h3>
                        <div class="styled-input agile-styled-input-top">
                            <p>Name</p>
                            <input type="text" name="name"  value="{{$shipping_info['name'] }}" >
                            <span></span>
                        </div>
                        <div class="styled-input">
                        <p>Email</p>
                            <input type="email" name="email" required="" value="{{$shipping_info->email}}">
                            <span></span>
                        </div> 
                        <div class="styled-input ">
                        <p>Phone No</p>
                            <input type="text" name="phone" required="" value="{{$shipping_info->phone}}">
                            <span></span>
                        </div>
                        <div class="styled-input">
                        <p>Address</p>
                            <input type="text" name="address" required="" value="{{$shipping_info->address}}"> 
                            <span></span>
                        </div> 
                        <form action="{{ route('admin.modifysave' , $order->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="styled-input">
                        <p>Order Status</p>
                            <select class="form-control row b-none" name="status" id="status_dropdown">
                                    <option value="0" <?php if($order->status == 0)echo "selected"; ?> >Processing</option>
                                    <option value="1" <?php if($order->status == 1)echo "selected"; ?> >Delivering</option>
                                    <option value="2" <?php if($order->status == 2)echo "selected"; ?> >Delivered </option>
                                </select>
        
                                <span></span>
                            </div>  <br><br>
                            <input type="submit" class="btn btn-success" name="submit" value="Confirm Changing Status">
                        </form>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
                    <br><h2><b>Product Details</b></h2><br>
                    <br>
                    <div class="container">

                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Product Title</th>
                                <th>Quantity</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ordered_products as $ordered_product)
                                <tr>
                                    <td><img height="60px" width="80px" src="{{ asset('storage/'.$ordered_product->getProductbyID($ordered_product['product_id'])->cover_image) }}" ></td>
                                    <td>{{ $ordered_product->getProductbyID($ordered_product['product_id'])->name }}</td>
                                    <td>{{ $ordered_product['quantity'] }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3">Total Price</td>
                                    <td>{{ $order->total_price }}</td>
            
                                <tr>
                            </tbody>
                            </table>

                        </div>
                </div>
            </div>
      </div>
</div>


@endsection