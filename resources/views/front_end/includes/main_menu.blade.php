<div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <div class="cat_heading">Product Categories</div>
            <ul class="nav navbar-nav nav_1">
                <?php foreach ($all_published_category as $v_all_published_category) { ?>
                <li><a href="{{URL::to( '/category/'.$v_all_published_category->id )}}"><?php echo $v_all_published_category->category_name; ?></a></li>
                <?php } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>