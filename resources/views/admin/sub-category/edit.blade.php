@extends('admin.master')
@section('title','Edit Category')
@section('body')

    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
            <h2>Category</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Sub Category</a></li>
                <li class="breadcrumb-item active">Edit Sub Category</li>
            </ul>
        </div>
    </div>
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="">
                    <h3 class="text-center"> Edit Sub Category Form </h3>
                </div>
                <div class="body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
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
                                                <option value="{{$category->id}}" @selected($category->id == $sub_category->category_id)>{{$category->name}}</option>
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
                                    <div class="form-line">
                                        <input type="text" name="name" value="{{$sub_category->name}}" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Category Description</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" placeholder="Category Description" name="description">{{$sub_category->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label  class="text-black">Category Image</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="">
                                    <div class="">
                                        <input type="file" name="image" class="form-control" />
                                        <img src="{{asset($sub_category->image)}}" alt="" height="100" width="100">
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

                                    <input  type="radio" id="radio_1" name="status" {{$sub_category->status == 1 ? 'checked' : ''}} value="1"  />
                                    <label for="radio_1">Published</label>

                                    <input  type="radio" id="radio_2" name="status" {{$sub_category->status == 0 ? 'checked' : ''}} value="0" />
                                    <label for="radio_2">Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="offset-md-2 offset-lg-2">
                                <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect">Update Sub Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Horizontal Layout -->





@endsection


