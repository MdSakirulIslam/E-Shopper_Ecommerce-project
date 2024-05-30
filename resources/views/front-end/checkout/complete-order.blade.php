@extends('front-end.master')

@section('title', 'Complete Order Page')

@section('cart')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Checkout</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb-nav justify-content-md-end">
                        <li><a href="{{ route('home') }}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="">Shop</a></li>
                        <li>Complete Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-body">
                        <h4 class="text-center text-success">{{ session('message') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
