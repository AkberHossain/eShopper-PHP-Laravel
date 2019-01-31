@extends('website.website-layouts.layout')

@section('body')

<div class="container text-center">
        <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
        @if(Session::has('error_message'))
                <p class=" alert alert-danger">{{ Session::get('error_message') }}</p>
                {{ Session::put('error_message' , NULL)}}
            @endif
        <form action="{{ route('user.login') }}" method="post">
            {{csrf_field()}}
            <div class="styled-input agile-styled-input-top">
                <input type="email" name="email" required="">
                <p>Email</p>
                <span></span>
            </div>
            <div class="styled-input">
                <input type="password" name="password" required=""> 
                <p>Password</p>
                <span></span>
            </div> 
            <input type="submit" value="Sign In">
        </form> 

        <p>No Account? <a href="{{ route('user.showsignup') }}">create now!</a></p>
</div>

@endsection