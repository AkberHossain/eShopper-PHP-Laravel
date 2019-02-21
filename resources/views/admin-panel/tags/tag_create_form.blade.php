@extends('admin-panel.admin-layouts.layout')

@section('page-content')

<div id="page-wrapper">
    <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <div>
                        <h2 class="page-title">Enter Categories Information</h2> 
                  </div>
                  <br>
                    <form action="{{ route('tag.store') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
            
                      <button type="submit" class="btn btn-primary">Create Tag</button>
                    </form>
                </div>
            </div>
      </div>
</div>

@endsection
