@extends('front_end.master')
@section('title')
    Payment Info
@endsection
@section('main_content')
    <div class="row">
    <div class="col-lg-12">
        <div class="well lead text-center">
            You have give us your product payment information to complete your valuable order. 
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-offset-2 col-lg-8">
        <h3 class="text-center">Your payment information goes here</h3>
        <hr/>
        <div class="panel panel-default">
            <div class="panel-body">
                <p class="warning">Default Delivery time is 12PM to 9PM. Or you can choose</p>
                {!! Form::open(array('url'=>'/new-order', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
                
                <div class="form-group">
                    <label class="control-label col-lg-3"> Morning time 8am-2pm </label>
                    <div class="col-lg-9">
                        <input type="radio" name="delivery_time" value="morning">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3"> Evening time 2pm-8pm </label>
                    <div class="col-lg-9">
                        <input type="radio" name="delivery_time" value="evening">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3"> Cash On Delivery </label>
                    <div class="col-lg-9">
                        <input type="radio" name="payment_type" value="cash_on_delivary">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3"> Paypal </label>
                    <div class="col-lg-9">
                        <input type="radio" name="payment_type" value="paypal" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">BKash</label>
                    <div class="col-lg-9">
                        <input type="radio" name="payment_type" value="bkash">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <input type="submit" name="btn" value="Confirm Order" class="btn btn-primary btn-block">
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection