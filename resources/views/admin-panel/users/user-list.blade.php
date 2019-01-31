@extends('admin-panel.admin-layouts.layout')

@section('page-content')


    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Users</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div>
                    <input type="text" name="find_user" placeholder="search user by name or id" >
                    <a href="#" class="btn btn-success">Search</a>
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
                            <h3 class="box-title">All Users</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Joining Date</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Dynamically Database theke asbe category wise -->
                                        @foreach($users as $user)
                                            <tr>
                                                <td></td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>@if($user->role == 0)
                                                        Customer
                                                    @else
                                                        Admin
                                                    @endif
                                                </td>
                                                <td>{{$user->created_at}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary">Order List</a>
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