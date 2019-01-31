@extends('admin-panel.admin-layouts.layout')

@section('page-content')


    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Orders</h4> </div>
                        
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div class="row">

                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <form class="form-inline" action="{{ route('admin.orderbyid') , 3}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control" name="search_id"  placeholder="search By ID">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <select class="form-control pull-right row b-none" id="status_dropdown">
                            <option value="3" >All Status</option>
                            <option value="0" >Processing</option>
                            <option value="1" >Delivering</option>
                            <option value="2" >Delivered </option>
                        </select>   
                        
                    </div>
                </div>

                
                <br>
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">All Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Ordered Date</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_body">
                                        <!-- Dynamically Database theke asbe category wise -->
                                        @if(!($orders))

                                            <div class="alert alert-danger">No Order</div>
                                        @else
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->date}}</td>
                                                    <td>{{$order->total_price}}</td>
                                                    <td>@if($order->status == 0)
                                                            <a class="btn btn-danger" >Processing</div>    
                                                        @elseif($order->status == 1)
                                                            <a class="btn btn-warning">Delivering</div>
                                                        @else
                                                            <a class="btn btn-success" >Delivered</div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($order->status == 2)
                                                            <a href="#" class="btn btn-success">Details</a>
                                                        @else
                                                            <a href="{{ route('admin.ordermodify' , $order->id) }}" class="btn btn-primary">Modify</a>
                                                        @endif 
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
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

@push('extra_scripts')

<script>

        $(document).ready(function(){

            $("#status_dropdown").on("change" , function(){

                var status = $("#status_dropdown").val();

                $.ajax({

                    url:"/admin-orderbystatus/"+status ,
                    type: "GET" ,
                    success:function(data){

                        console.log(data);

                    }

                });

            });
        });

    </script>

@endpush