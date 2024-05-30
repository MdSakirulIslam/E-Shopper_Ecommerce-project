@extends('front-end.master')

@section('title', 'Cart Index Page')

@section('cart')

    <section id="cart_items">
        <div class="container">
{{--            <div class="breadcrumbs">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li><a href="{{ route('home') }}">Home</a></li>--}}
{{--                    <li class="active">Shopping Cart</li>--}}
{{--                </ol>--}}
{{--            </div>--}}
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td>Remove</td>
                    </tr>
                    </thead>
                    <tbody>
                    @php($sum = 0)
                    @foreach($cart_products as $cart_product)
                        <tr>
                            <td class="cart_product">
                                <a href="{{ route('product.details', ['id' => $cart_product->id]) }}"><img src="{{ asset($cart_product->options->image) }}" alt="{{ $cart_product->name }}" height="50" width="50"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="{{ route('product.details', ['id' => $cart_product->id]) }}">{{ $cart_product->name }}</a></h4>
                                <p><em>Code:</em> {{$cart_product->options->code}}</p>
                            </td>
                            <td class="cart_price">
                                <p>${{ $cart_product->price }}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <form action="{{ route('cart.update', ['row_id' => $cart_product->rowId]) }}" method="POST">
                                        @csrf
                                        <input class="" type="number" name="qty" value="{{ $cart_product->qty }}" autocomplete="off" size="2">
                                        <button type="submit" class="cart_quantity_update btn btn-default">Update</button>
                                    </form>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">Tk.{{ round($cart_product->subtotal, 2) }}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{ route('cart.delete', ['row_id' => $cart_product->rowId]) }}" onclick="return confirm('are you sure to delete this..')"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @php($sum += $cart_product->subtotal)
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>Tk.{{$sum}}</span></li>
                            <li>Tax <span>Tk.{{$tax = round($sum*0.15)}}</span></li>
                            <li>Shipping Cost <span>{{$shipping = 100}}</span></li>
                            <li>Total <span>Tk.{{ $sum + $tax + $shipping}}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="{{ route('checkout') }}">Check Out</a>
                        <a class="btn btn-default check_out" href="{{ route('home') }}">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
    <?php
    Session::put('sum',$sum);
    ?>
@endsection




