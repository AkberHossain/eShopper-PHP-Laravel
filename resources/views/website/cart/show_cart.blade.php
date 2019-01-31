@extends('website.website-layouts.layout')

@section('body')

<div class="container">

    @if($cart)
    <table class="table table-bordered">
    <thead>
        <tr>
        <th>#</th>
        <th>Product Title</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart->products as $product)
        <tr>
            <td><img height="60px" width="80px" src="{{ asset('storage/'.$product['product']['cover_image']) }}" ></td>
            <td>{{ $product['product']['name'] }}</td>
            <td>{{ $product['qty'] }}</td>
            <td><p>{{ $product['product']['sell_price'] }} * {{ $product['qty'] }} = {{$product['price']  }}</p></td>
            <td><a href="#" class="btn btn-warning btn-sm">Reduce 1</a>  <a href="#" class="btn btn-danger btn-sm">Remove all</a></td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3"></td>
            <td>{{ $cart->total_price }}</td>
            <td>
                <a href="{{route('product.removecart')}}" class="btn btn-warning btn-sm">Remove this cart</a>  
                <a href="{{ route('product.checkout') }}" class="btn btn-success">CheckOut</a>
            </td>
        <tr>
    </tbody>
    </table>
    @else
        <div class="alert alert-danger text-center">No Product to Checkout</div>
    @endif

</div>

@endsection