@extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1>Checkout</h1>
        <h4>Your total ${{ $total }}</h4>
        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : '' }}">
            {{ Session::get('error') }}
        </div>
        <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-name">Card Holder Name</label>
                        <input type="text" id="card-name" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Credit Card Number</label>
                        <input type="text" id="card-number" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Expiration Month</label>
                        <input type="text" id="card-expiry-month" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">Expiration Year</label>
                        <input type="text" id="card-expiry-year" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="">CVC</label>
                        <input type="text" id="card-cvc" class="form-control" required>
                    </div>
                </div>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-success">Buy Now</button>
        </form>
    </div>
</div>
@endsection




@section('scripts')


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{ asset('assets/js/checkout.js') }}"></script>

@endsection
