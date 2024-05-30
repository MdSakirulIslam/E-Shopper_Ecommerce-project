@extends('front-end.master')

@section('title','Register Page')

@section('body')

    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-3">
                    <div class="signup-form"><!--sign up form-->
                        <h2>No Account? Register</h2>
                        <h4>New User Register!</h4>
                        <p>{{session('message')}}</p>
                        <form class="row" method="post" action="{{route('customer.register')}}">
                            @csrf
                            <input class="" value="{{old('name')}}" placeholder="Name" type="text" name="name" id="reg-fn" required/>
                            <input class="" value="{{old('email')}}" placeholder="Email Address" type="email" name="email" id="reg-email" required/>
                            <input class="" value="{{old('mobile')}}" placeholder="Phone Number" type="number" name="mobile" id="reg-phone" required/>
                            <input class="" placeholder="Password" type="password" name="password" id="reg-pass" required/>
                            <input class=""placeholder="Confirm Password" type="password" name="confirm_password" id="reg-pass-confirm" required/>
                            <button type="submit" class="btn btn-default">Register</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->


@endsection

