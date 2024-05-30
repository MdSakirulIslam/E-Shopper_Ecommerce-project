@extends('front-end.master')

@section('title', 'Customer Dashboard')

@section('body')
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4"> <!-- Adjust column widths as needed -->
                    <h1>My Dashboard</h1>

                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">My Dashboard</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-orders" type="button" role="tab" >My Orders</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8"> <!-- Adjust column widths as needed -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">My dashboard</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">My profile</div>
                        <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>sl</th>
                                    <th>order no</th>
                                    <th>order total</th>
                                    <th>order status</th>
                                    <th>action</th>
                                </tr>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="">{{ '000'.$order->id }}</a>
                                        </td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>
                                            <a href="">invoice</a> ||
                                            <a href="">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
