@extends('front_end.master')
@section('title')
    Home
@endsection
@section('main_content')
    
<div class="top-brands">
    <div class="container">
        <h3>Hot Offers</h3>
        <div class="agile_top_brands_grids">
            <?php foreach ($all_published_product as $v_all_published_product) { ?>                
            <div class="col-md-3 top_brand_left" style="margin-top: 25px;">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="tag"><img src="{{asset($v_all_published_product->product_image )}}" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="{{ URL::to('/product-details/'.$v_all_published_product->id) }}">
                                           <br/> <br/><br/> <br/><br/><br/><br/>
                                        </a>		
                                        <p>{{$v_all_published_product->product_name}}</p>
                                        <h4>BDT {{$v_all_published_product->product_price}} Tk.</h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                       
                                        <a class="btn btn-info" href="{{ URL::to('/product-details/'.$v_all_published_product->id) }}"> ADD TO CART</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

@endsection