@extends('website.website-layouts.layout')

@section('body')

    <div class="container">
            @if(Session::get('error_message'))
                <p class=" alert alert-danger">{{ Session::get('error_message') }}</p>
                {{ Session::put('error_message' , NULL)}}
            @endif
            <br>
        <h3 class="agileinfo_sign">Select payment Method </h3>
        <form action="{{ route('product.confirm')}}" method="post" >
            {{ csrf_field()}}

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
            <h3 class="agileinfo_sign">Enter Shipping Information </h3>
            <div class="styled-input agile-styled-input-top">
                <input type="text" name="name" required="">
                <p>Name</p>
                <span></span>
            </div>
            <div class="styled-input">
                <input type="email" name="email" required=""> 
                <p>Email</p>
                <span></span>
            </div> 
            <div class="styled-input ">
                <input type="text" name="phone" required="">
                <p>Phone No</p>
                <span></span>
            </div>
            <div class="styled-input">
                <input type="text" name="address" required=""> 
                <p>Address</p>
                <span></span>
            </div> 
            <input class="btn btn-success" type="submit" value="Confirm Your Order">
        </form>
    </div>

@endsection