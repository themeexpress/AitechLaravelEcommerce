<!DOCTYPE html>
<html>
    <head>
        <title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="{{asset('public/front_end/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('public/front_end/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link href="{{asset('public/front_end/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" /> 
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="{{asset('public/front_end/js/jquery-1.11.1.min.js')}}"></script>
        <!-- //js -->
        
         <script src='{{asset('public/front_end/js/okzoom.js')}}'></script>
        <script>
          $(function(){
            $('#example').okzoom({
              width: 150,
              height: 150,
              border: "1px solid black",
              shadow: "0 0 5px #000"
            });
          });
        </script>
        
        
        <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="{{asset('public/front_end/js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/front_end/js/easing.js')}}"></script>
        <script type="text/javascript">
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});
        </script>
        <!-- start-smoth-scrolling -->
    </head>

    <body>
        <!-- header -->
        @include('front_end.includes.header')
        <!-- //header -->
        <!-- banner -->
        <div class="banner">
            @include('front_end.includes.main_menu')
            @include('front_end.slider.home_slider')
            <div class="clearfix"></div>
        </div>
        <!-- banner -->
        <div>
            @yield('main_content')
        </div>
        <!-- //fresh-vegetables -->
        <!-- newsletter -->
        @include('front_end.includes.footer')
        <!-- //footer -->
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('public/front_end/js/bootstrap.min.js')}}"></script>
        <script>
$(document).ready(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
    );
});
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->
        <script src="{{asset('public/front_end/js/minicart.min.js')}}"></script>
        <script>
            // Mini Cart
            paypal.minicart.render({
                action: '#'
            });

            if (~window.location.search.indexOf('reset=true')) {
                paypal.minicart.reset();
            }
        </script>
    </body>
</html>