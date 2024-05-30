@extends('admin.master')
@section('title','Edit Brand')
@section('body')

    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
            <h2>Brand</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Brand</a></li>
                <li class="breadcrumb-item active">Edit Brand</li>
            </ul>
        </div>
    </div>
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="">
                    <h3 class="text-center"> Edit Brand Form </h3>
                </div>
                <div class="body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('brand.update',['id'=> $brand->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Brand Name</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" value="{{$brand->name}}" class="form-control" placeholder="Brand Name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label class="text-black">Brand Description</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" placeholder="Brand Description" name="description">{{$brand->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label  class="text-black">Brand Image</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 ">
                                <div class="">
                                    <div class="">
                                        <input type="file" name="image" class="form-control" />
                                        <img src="{{asset($brand->image)}}" alt="" height="100" width="100">
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

                                    <input  type="radio" id="radio_1" name="status" {{$brand->status == 1 ? 'checked' : ''}} value="1"  />
                                    <label for="radio_1">Published</label>

                                    <input  type="radio" id="radio_2" name="status" {{$brand->status == 0 ? 'checked' : ''}} value="0" />
                                    <label for="radio_2">Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="offset-md-2 offset-lg-2">
                                <button type="submit" class="btn btn-raised btn-primary m-t-15 waves-effect">Update Brand Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Horizontal Layout -->





@endsection

