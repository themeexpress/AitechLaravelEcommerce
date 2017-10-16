@extends('front_end.master')
@section('title')
    Product Details
@endsection
@section('main_content')
<div class="banner">
    <div class="w3l_banner_nav_right">
        <div class="agileinfo_single">
            <h5> {{ $product_info->product_name }}</h5>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="{{asset($product_info->product_image)}}" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="w3agile_description">
                    <h4>Description :</h4>
                    <p> {{ $product_info->product_short_description }}</p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4>BDT {{ $product_info->product_price }}</h4>
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <form action="{{ url('/add-to-cart') }}" method="post">
                            {{ csrf_field() }}
                            <fieldset>
                                <input type="hidden" name="product_id" value="{{ $product_info->id }}" />
                                <input type="number" name="qty" min="1" value="1" class="form-control"/>
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
    <div class="container">
        <h3>Related Product</h3>
        <div class="w3ls_w3l_banner_nav_right_grid1">

            @foreach( $category_product as $product )
            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="{{asset($product->product_image)}}" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ URL::to('/product-details/'.$product->id) }}"><br/> <br/><br/> <br/><br/><br/><br/></a>
                                        <p>{{ $product->product_name }}</p>
                                        <h4>BDT {{ $product->product_price }} Tk.</h4>
                                    </div>
                                    <div class="snipcart-details">
                                        {{-- <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="knorr instant soup" />
                                                <input type="hidden" name="amount" value="3.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form> --}}
                                        <a class="btn btn-info" href="{{ URL::to('/product-details/'.$product->id) }}"> ADD TO CART</a>

                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

@endsection