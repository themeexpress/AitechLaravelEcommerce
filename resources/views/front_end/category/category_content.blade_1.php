@extends('front_end.master')
@section('main_content')

<div class="w3l_banner_nav_right" style="background-color: white;">
    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
        <h3>Household Products</h3>
        <div class="w3ls_w3l_banner_nav_right_grid1">
            <?php foreach ($category_product as $v_all_published_category) { ?>
            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="{{asset($v_all_published_category->product_image)}}" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><br/> <br/><br/> <br/><br/><br/><br/></a>
                                        <p>{{ $v_all_published_category->product_name }}</p>
                                        <h4>BDT {{ $v_all_published_category->product_price }}</h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="dishwash gel, lemon" />
                                                <input type="hidden" name="amount" value="8.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
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
<div class="clearfix"></div>
@stop
