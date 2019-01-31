@extends('website.website-layouts.layout')

@section('body')

    

    <!-- banner2 -->
    @include('website.website-components.banner2')
    <!-- //banner2 -->


    <!-- schedule-bottom -->
    @include('website.website-components.schedule-bottom')
    <!-- //schedule-bottom -->


    <!--grids-->
    @include('website.website-components.grids')					
    <!--//grids-->

    <!-- new_arrivals --> 
    @include('website.website-components.new-arrivals')
    <!-- //new_arrivals --> 

    <!-- /we-offer -->
    @include('website.website-components.we-offer')
    <!-- //we-offer -->





@endsection