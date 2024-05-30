@extends('admin.master')
@section('title','Manage Product')
@section('body')

    <div class="block-header">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-7">
                <h2>Product</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Product</a></li>
                    <li class="breadcrumb-item active">Manage Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!--table start-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header text-center">
                    <h3> All Product Information </h3>
                </div>
                <div class="body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Stock</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td><img src="{{asset($product->image)}}" alt="" height="50" width="60"/></td>
                                    <td>{{$product->stock_amount}}</td>
                                    <td>{{$product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-secondary btn-sm rounded-0">
                                            <i class="material-icons">bookmark</i>
                                        </a>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-secondary btn-sm rounded-0">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="{{route('product.delete', ['id' => $product->id])}}" onclick="return confirm('Are you sure to delete this..');" class="btn btn-warning btn-sm rounded-0">
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
