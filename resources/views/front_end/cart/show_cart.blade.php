@extends('front_end.master')
@section('title')
Cart
@endsection
@section('main_content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body"> 
                <h3>My Shopping Cart</h3>
                <hr/>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                        {{ $i=1 }}
                        {{ $total = 0 }}
                        @foreach( $cart_products as $cart_product)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $cart_product->name }}</td>
                            <td>BDT {{ $cart_product->price }}</td>
                            <td>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input type="number" value="{{ $cart_product->qty }}" name="qty" class="form-control"/>
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-info">
                                                <span class="glyphicon glyphicon-upload"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </td>
                            <td>BDT <?php echo $subTotal=$cart_product->qty*$cart_product->price ?> </td>
                            <td> 
                                <a href="{{ url('/delete-cart-product/'.$cart_product->rowId) }}">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        {{ $total = $total+$subTotal }}
                        @endforeach
                    </table>
                    <table class="table table-bordered">
                        <tr>
                            <td>Total Price</td>
                            <td class="success pull-right">{{ $total  }}
                                <?php
                                Session::put('order_total', $total);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>

                <a href="{{ url('/checkout') }}" class="btn btn-primary pull-right">Check Out</a>

                <a href="{{ url('/') }}" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>


@endsection