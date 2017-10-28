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
    <div class="col-lg-3"></div>
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
    <div class="col-lg-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    </div>
</div>
@endsection