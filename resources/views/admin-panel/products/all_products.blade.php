@extends('admin-panel.admin-layouts.layout')

@section('page-content')

    
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Products</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div>
                    <a href="/product-create" class="btn btn-success">Add new products</a>
                </div>
                <br>
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>Category1</option>
                                    <option>Category2</option>
                                </select>
                            </div>
                            <h3 class="box-title">All Products</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Sell Price</th>
                                            <th>Buy Price</th>
                                            <th>Description</th>
                                            <th>Stock</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Dynamically Database theke asbe category wise -->
                                        @foreach($products as $product)
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->sell_price}}</td>
                                                <td>{{$product->buy_price}}</td>
                                                <td>{{$product->short_description}}</td>
                                                <td>{{$product->stock}}</td>
                                                <td>
                                                    <a href="{{ route('admin.product-details' , $product->id) }}" class="btn btn-primary">Details</a>
                                                    <a href="#" class="btn btn-primary">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; Admin panel Design by VisionTech </footer>
        </div>


@endsection