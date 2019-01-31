@extends('admin-panel.admin-layouts.layout')

@section('page-content')

<div id="page-wrapper">
    <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                  <div>
                        <h2 class="page-title">Products Information</h2> 
                  </div>
                  <br>
                    <form action="#" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value ="{{ $product->name }}"  aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sell Price</label>
                        <input type="text" name="sell_price" class="form-control" id="exampleInputEmail1" value ="{{ $product->sell_price }}" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Buy Price</label>
                        <input type="text" name="buy_price" class="form-control" id="exampleInputEmail1" value ="{{ $product->buy_price }}" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Short Description</label>
                        <input type="text" name="short_desc" class="form-control" id="exampleInputEmail1" value ="{{ $product->short_description }}" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Stock</label>
                        <input type="text" name="stock" class="form-control" id="exampleInputEmail1" value ="{{ $product->stock }}" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Select category</label>
                        <select class="select2" name="categories[]" multiple="multiple">
                          @foreach($categories as $category)
                          <option value="{{ $category->id }}" <?php if(in_array($category->id , $product_categories)){ echo "selected"; } ?> > {{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Details Description</label>
                        <textarea class="form-control" name="details_desc">{{ $product->long_description }}</textarea>
                      </div>

                      

                      
            
                      <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
      </div>
</div>

@endsection

@push('extra_scripts')
<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="{{ asset('js/bootstrap-tokenfield.js') }}"></script>

<script>
    
</script>

@endpush