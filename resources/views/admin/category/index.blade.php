@extends('admin.master')
@section('title','Manage Category')
@section('body')

        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Category</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Category</a></li>
                        <li class="breadcrumb-item active">Manage Category</li>
                    </ul>
                </div>
            </div>
        </div>
{{--<--table start-->--}}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header text-center">
                        <h3> All Category Information </h3>
                    </div>

                    <div class="body">
                        <p class="text-success text-center">{{session('message')}}</p>
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
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>
                                            <img src="{{asset($category->image)}}" alt="" height="50" width="60">
                                        </td>
                                        <td>{{$category->status}}</td>
                                        <td>
                                            <a href="{{route('category.edit',['id'=> $category->id])}}" class="btn btn-success btn-sm rounded-0">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="{{route('category.delete',['id'=>$category->id])}}" onclick="return confirm('Are you sure to delete this....')" class="btn btn-warning btn-sm rounded-0">
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

