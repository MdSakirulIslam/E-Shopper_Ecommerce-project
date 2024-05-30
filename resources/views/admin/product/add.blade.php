@extends('admin.master')
@section('title','Add Product')
@section('body')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-7">
                <h2>Product</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Product</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="">
                    <h3 class="text-center"> Add Product Form </h3>
                </div>
                <p class="text-muted text-center text-success">{{session('message')}}</p>
                <div class="body">
                    <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Category Name</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <select class="form-control" name="category_id" >
                                        <option value="">-- Select Category Name --</option>
                                        <div>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </div>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Sub Category Name</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <select class="form-control" name="sub_category_id" >
                                        <option value="">-- Select Sub-Category Name --</option>
                                        <div>
                                            @foreach($sub_categories as $sub_category)
                                                <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                            @endforeach
                                        </div>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Brand Name</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <select class="form-control" name="brand_id" >
                                        <option value="">-- Select Brand Name --</option>
                                        <div>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </div>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Unit</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <select class="form-control" name="unit_id" >
                                        <option value="">-- Select Unit --</option>
                                        <div>
                                            @foreach($units as $units)
                                                <option value="{{$units->id}}">{{$units->name}}</option>
                                            @endforeach
                                        </div>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Product Name</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Product Name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Product Code</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="code" class="form-control" placeholder="Product Code" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Short Description</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" placeholder="Short Description" name="short_description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Long Description</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="ckeditor" class="form-control" placeholder="Long Description" name="long_description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Meta Title</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="meta_title" class="form-control" placeholder="Meta Title" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Meta Description</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" placeholder="Meta Description" name="meta_description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Product Price</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="regular_price" class="form-control" placeholder="Regular Price" />
                                        <input type="number" name="selling_price" class="form-control" placeholder="Selling Price" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Stock Amount</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="stock_amount" class="form-control" placeholder="Stock Amount" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label  class="text-black">Product Image</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="">
                                    <div class="">
                                        <input type="file" name="image" class="form-control" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label  class="text-black">Product Other Images</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="">
                                    <div class="">
                                        <input type="file" name="other_image[]" multiple accept="image/*" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Publication Status</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="demo-radio-button">

                                    <input  type="radio" id="radio_1" name="status" value="1" checked />
                                    <label for="radio_1">Published</label>

                                    <input  type="radio" id="radio_2" name="status" value="0" />
                                    <label for="radio_2">Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="offset-md-2 offset-lg-2">
                                <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect">Create New Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Horizontal Layout -->
@endsection
