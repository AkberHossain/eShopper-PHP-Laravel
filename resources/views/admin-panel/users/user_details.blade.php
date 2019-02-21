@extends('admin-panel.admin-layouts.layout')

@section('page-content')

<div id="page-wrapper">
    <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                  <div>
                        <h2 class="page-title">Users Information</h2> 
                  </div>
                  <br>
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" disabled class="form-control" id="exampleInputEmail1" value ="{{ $user->name }}" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" disabled class="form-control" id="exampleInputEmail1" value ="{{ $user->phone }}" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" disabled  class="form-control" id="exampleInputEmail1" value ="{{ $user->email }}" >
                      </div>
                    </form>
                </div>
            </div>
      </div>
</div>

@endsection