@extends('admin.master')
@section('title','Manage Brand')
@section('body')
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Brand</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Brand</a></li>
                        <li class="breadcrumb-item active">Manage Brand</li>
                    </ul>
                </div>
            </div>
        </div>
        {{--<--table start-->--}}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header text-center">
                        <h3> All Brand Information </h3>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>{{$brand->description}}</td>
                                        <td>
                                            <img src="{{asset($brand->image)}}" alt="" height="50" width="60">
                                        </td>
                                        <td>{{$brand->status}}</td>
                                        <td>
                                            <a href="{{route('brand.edit',['id'=> $brand->id])}}" class="btn btn-success btn-sm rounded-0">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="{{route('brand.delete',['id'=>$brand->id])}}" onclick="return confirm('Are you sure to delete this....')" class="btn btn-warning btn-sm rounded-0">
                                                <i class="material-icons">delete</i>
                                            </a>

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



@endsection
