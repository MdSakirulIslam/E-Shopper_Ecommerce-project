@extends('front-end.master')

@section('title', 'Product Detail Page')

@section('body')

    <section>
        <div class="container">
            <form action="{{route('cart.add')}}" method="post">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="id">
                <div class="row">
                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                                    <h3>{{ $product->name }}</h3>
                                </div>
                                <!-- Additional Images -->
                                <div id="similar-product" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($product->otherImages as $key => $image)
                                            <div class="item {{ $key === 0 ? 'active' : '' }}">
                                                <img src="{{ asset($image->image) }}" alt="Image {{ $key + 1 }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Controls -->
                                    <a class="left item-control" href="#similar-product" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right item-control" href="#similar-product" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    @if($product->is_new)
                                        <img src="{{ asset('/front-end-assets/images/product-details/new.jpg') }}" class="newarrival" alt="New Arrival" />
                                    @endif
                                    <h2>{{ $product->name }}</h2>
                                    <p>{!! $product->long_description !!}</p>
                                    <p><b>Regular Price:</b>Tk.<del>{{ $product->regular_price }}</del></p>
                                    <p><b>Selling Price:</b> Tk.{{ $product->selling_price }}</p>
                                    <p><b>Stock Amount:</b> {{ $product->stock_amount }}</p>
                                    <p><b>Code:</b> {{ $product->code }}</p>
                                    <!-- Rating -->
                                    <!-- Assuming you have a rating field in your product model -->
                                    @if($product->rating > 0)
                                        <img src="{{ asset('/front-end-assets/images/product-details/rating.png') }}" alt="Rating" />
                                    @endif
                                    <span>
                                <label>Quantity:</label>
                                <input type="number" name="qty" value="1" min="1" /> <!-- Set default quantity to 1 -->
                                <button type="submit" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>
                                    <p><b>Availability:</b> {{ $product->stock_amount > 0 ? 'In Stock' : 'Out of Stock' }}</p>
                                    <p><b>Brand:</b> {{ $product->brand->name }}</p>
                                    <a href="#"><img src="{{ asset('/front-end-assets/images/product-details/share.png') }}" class="share img-responsive" alt="Share" /></a>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection






