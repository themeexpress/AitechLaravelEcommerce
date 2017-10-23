@extends('front_end.master')
@section('title')
Checkout
@endsection
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <div class="well lead text-center">
            You have to login to complete your valuable order. If you are not registered then please register first. 
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <h3 class="text-center">You may login here</h3>
        <hr/>
        <div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(array('url'=>'/customer-login', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
                <div class="form-group">
                    <label class="control-label col-lg-3">Email Address</label>
                    <div class="col-lg-9">
                        <input type="email" name="email_address" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Password</label>
                    <div class="col-lg-9">
                        <input type="password" name="password" class="form-control"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <input type="submit" name="btn" value="Login" class="btn btn-primary btn-block">
                    </div>
                </div>
                {!! Form::close() !!}
                <a style="margin-left:158px;" href="{{url('/forget-password')}}"> Forget Password </a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3 class="text-center">You may Register here</h3>        
        <hr/>
        <p><span style="color:red">*</span> Selected Fields are required</p>
        <div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(array('url'=>'/new-checkout', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
                <div class="form-group">
                    <label class="control-label col-lg-3"> First Name <span style="color:red;">*</span> </label>
                    <div class="col-lg-9">
                        <input type="text" name="first_name" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Last Name <span style="color:red;">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" name="last_name" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Email Address <span style="color:red;">*</span></label>
                    <div class="col-lg-9">
                        <input type="email" name="email_address" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Password <span style="color:red;">*</span></label>
                    <div class="col-lg-9">
                        <input type="password" name="password" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Phoner Number <span style="color:red;">*</span></label>
                    <div class="col-lg-9">
                        <input type="number" name="phone_number" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Address</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" name="address"></textarea>
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
                        <input type="submit" name="btn" value="Registration" class="btn btn-primary btn-block">
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection