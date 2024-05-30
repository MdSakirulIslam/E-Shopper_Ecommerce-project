@extends('admin.master')
@section('title','Details Product')
@section('body')

    <div class="block-header">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-7">
                <h2>Product</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Product Details</a></li>
                    <li class="breadcrumb-item active">Details Product</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="">
                    <h2 class="text-center"> Product Details Information</h2>
                </div>
                <div class="body">
                    <p class="text-muted text-center">{{session('message')}}</p>
                    <table id="mainTable" class="table table-hover table-bordered table-striped">
                        <tr>
                            <th>Product Id</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Product code</th>
                            <td>{{$product->code}}</td>
                        </tr>
                        <tr>
                            <th>Product Category</th>
                            <td>{{$product->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Sub Category</th>
                            <td>{{$product->subCategory->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Brand</th>
                            <td>{{$product->brand->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Unit</th>
                            <td>{{$product->unit->name}}</td>
                        </tr>


                        <tr>
                            <th>Short Description</th>
                            <td>{{$product->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{!! $product->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Meta Title</th>
                            <td>{{$product->meta_title}}</td>
                        </tr>
                        <tr>
                            <th>Meta Description</th>
                            <td>{{$product->meta_description}}</td>
                        </tr>
                        <tr>
                            <th>Product Regular Price</th>
                            <td>{{$product->regular_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Selling Price</th>
                            <td>{{$product->selling_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Stock Amount</th>
                            <td>{{$product->stock_amount}}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{asset($product->image)}}" alt="" height="200" width="200"/></td>
                        </tr>
                        <tr>
                            <th>Product Other Image</th>
                            <td>
                                @foreach($product->otherImages as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" alt="" height="200" width="200"/>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Product Feature Status</th>
                            <td>{{$product->featured_status}}</td>
                        </tr>
                        <tr>
                            <th>Product Trending Status</th>
                            <td>{{$product->trending_status}}</td>
                        </tr>
                        <tr>
                            <th>Total Seles</th>
                            <td>{{$product->sales_count}}</td>
                        </tr>
                        <tr>
                            <th>Total View</th>
                            <td>{{$product->hit_count}}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{$product->status}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
