@extends('admin-panel.admin-layouts.layout')

@section('page-content')

<div id="page-wrapper">
    <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                  <div>
                        <h2 class="page-title">Enter Products Information</h2> 
                  </div>
                  <br>
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sell Price</label>
                        <input type="text" name="sell_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Buy Price</label>
                        <input type="text" name="buy_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Short Description</label>
                        <input type="text" name="short_desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Stock</label>
                        <input type="text" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Select category</label>
                        <select class="select2" name="categories[]" multiple="multiple">
                          @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Details Description</label>
                        <textarea class="form-control" name="details_desc"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Cover Image</label>
                        <input type="file" name="cover_image">
                      </div>
                       
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tags</label>
                        <input type="text" name="tags[]" class="form-control" id="tokenfield" value="" />
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/bootstrap-tokenfield.js') }}"></script>
<script>
    $(document).ready(function(){

      $('.select2').select2();

      $('#tokenfield').tokenfield({
        autocomplete: {
          source: "{{ url('/tag-find') }}" ,
          delay: 100
        },
        showAutocompleteOnFocus: true 
      });

    });
</script>

@endpush