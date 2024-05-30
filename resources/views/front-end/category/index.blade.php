@extends('front-end.master')

@section('title', 'Product Category Page')

@section('body')

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>
            @foreach($products as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{!! asset($product->image) !!}" alt="#" height="200px" width="200px" />
                                <h2>Tk.{{$product->selling_price}}</h2>
                                <p>{{$product->category->name}}</p>
                                <p>{{$product->name}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{route('cart.show')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="choose">
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{route('product.details', ['id' => $product->id])}}"><i class="fa fa-plus-square"></i>Product Details</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--features_items-->
        <!-- Pagination -->
        <ul class="pagination">
            <li class="active"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">&raquo;</a></li>
        </ul>
    </div>

@endsection