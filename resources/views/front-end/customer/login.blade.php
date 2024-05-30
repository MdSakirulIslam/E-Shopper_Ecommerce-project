@extends('front-end.master')

@section('title','login Page')

@section('cart')
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-3">
                    <div class="login-form "><!--login form-->
                        <h2>Login to your account</h2>
                        <p class="text-danger">{{session('message')}}</p>
                        <form action="{{route('customer.login')}}" method="post">
                            @csrf
                            <input type="text" name="user_name" placeholder="Your Email or Mobile" id="reg-email" required/>
                            <input type="password" placeholder="Enter your password.." name="password" id="reg-pass" required>
                            <span>
								<input type="checkbox"  class="checkbox">
								Keep me signed in
							</span>
                            <button type="submit"  class="btn btn-default">Login</button>
                        </form>
                        <p class="">Don't have an account? <a href="{{route('customer.register')}}">Register here </a>
                        </p>
                    </div><!--/login form-->
                </div>

                </div>
                </div>
        </div>


@endsection
