@extends('front_end.master')
@section('title')
    Shipping Info
@endsection
@section('main_content')
    <div class="row">
    <div class="col-lg-12">
        <div class="well lead text-center">
            You have give us your product shipping information to complete your valuable order. 
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-offset-2 col-lg-8">
        <h3 class="text-center">Your shipping information goes here</h3>
        <hr/>
        <div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(array('url'=>'/new-shipping', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
                <div class="form-group">
                    <label class="control-label col-lg-3"> Full Name </label>
                    <div class="col-lg-9">
                        <input type="text" name="full_name" value="{{ $customer->first_name.' '.$customer->last_name }}" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Email Address</label>
                    <div class="col-lg-9">
                        <input type="email" name="email_address" value="{{ $customer->email_address }}" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Phoner Number</label>
                    <div class="col-lg-9">
                        <input type="number" name="phone_number" value="{{ $customer->phone_number }}" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Address</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" name="address">{{ $customer->address }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">District Name</label>
                    <div class="col-lg-9">
                        <select class="form-control" name="district_name">
                            <option>---Select District Name---</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="savar">Savar</option>
                            <option value="gazipur">Gazipur</option>
                            <option value="narayangonj">Narayangonj</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <input type="submit" name="btn" value="Save Shipping Info" class="btn btn-primary btn-block">
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection