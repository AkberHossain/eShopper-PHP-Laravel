@extends('admin-panel.admin-layouts.layout')

@section('page-content')


<div id="page-wrapper">
    <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                  <div>
                        <h2 class="page-title">Modify Order Status</h2> 
                  </div>
                  <br>
                    <form action="#" method="POST">
                      {{ csrf_field() }}
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

                      <select class="form-control pull-right row b-none" id="status_dropdown">
                            <option value="3" >All Status</option>
                            <option value="0" >Processing</option>
                            <option value="1" >Delivering</option>
                            <option value="2" >Delivered </option>
                        </select>   

                      <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
      </div>
</div>


@endsection