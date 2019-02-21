@extends('admin-panel.admin-layouts.layout')

@section('page-content')

<div id="page-wrapper">
    <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <div>
                        <h2 class="page-title">Update Categories Information</h2> 
                  </div>
                  <br>
                    <form action="{{ route('category.update' , $category->id) }}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" value="{{$category->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Parent category</label>
                        <select class="select2" name="parent_categories[]" multiple="multiple">
                          @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
            
                      <button type="submit" class="btn btn-primary">Confirm Change</button>
                    </form>
                </div>
            </div>
      </div>
</div>

@endsection

@push('extra_scripts')
<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(document).ready(function(){

      $('.select2').select2();
      
    });
</script>

@endpush