@extends('website.website-layouts.layout')

@section('body')

<div class="container text-center">
        @if(Session::get('error_message'))
            <p class=" alert alert-danger">{{ Session::get('error_message') }}</p>
            {{ Session::put('error_message' , NULL)}}
        @endif
    <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
        
    <form action="{{ route('user.store')}}" method="post" >
        {{ csrf_field()}}
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
            <input type="password" name="password" required=""> 
            <p>Password</p>
            <span></span>
        </div> 
        <div class="styled-input">
            <input type="password" name="confirm_password" required=""> 
            <p>Confirm Password</p>
            <span></span>
        </div> 
        <input type="submit" value="Sign Up">
    </form>
</div>

@endsection