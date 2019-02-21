@extends('admin-panel.admin-layouts.layout')

@section('page-content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tags</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div>
                    <a href="/tag-create" class="btn btn-success">Add new tags</a>
                </div>
                <br>
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            
                            <h3 class="box-title">All Tags</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tag Title</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Dynamically Database theke asbe category wise -->
                                        @foreach($tags as $tag)
                                            <tr>
                                                <td></td>
                                                <td>{{$tag->name}}</td>
                                                <td>
                                                    <a href="{{ route('tag.details' , $tag->id) }}" class="btn btn-primary">Details</a>
                                                    <a href="{{ route('tag.delete' , $tag->id) }}" class="btn btn-primary">Delete</a>
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