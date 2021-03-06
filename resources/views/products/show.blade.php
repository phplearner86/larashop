@extends('layouts.app')

@section('content')
   


    @include('partials._logo')
<!-- //header -->
<!-- navigation -->
    @include('partials._main_nav')
    <!-- breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                    <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                    <li class="active"><a href="{{ route('products.index', 'category='. $product->group->category->slug) }}">{{ $product->group->category->name }}</a></li>
                    <li class="active"><a href="{{ route('products.index', 'group='. $product->group->slug) }}">{{ $product->group->name }}</a></li>
                </ol>
            </div>
        </div>
    <!-- //breadcrumbs -->
        <div class="products">
            <div class="container">

            @include('errors._list')
            @include('flash::message')

                <div class="agileinfo_single">
                    
                    <div class="col-md-4 agileinfo_single_left">
                        @if ($product->photos->count())
                            <div class="row">
                            <div class="col-md-12">
                            <img id="example" src="{{ asset($product->photos->first()->path) }}" alt=" " class="img-responsive" width="100%">
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($product->photos as $photo)
                            <div class="col-md-4">
                                <a href="">
                                    <img id="example" src="{{ asset($photo->path) }}" alt=" " class="img-responsive" width="100%">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="col-md-8 agileinfo_single_right">
                    <h2>{{ $product->name }}</h2>
                        <div class="rating1">
                            <form action="" method="POST">

                                {{ csrf_field() }}

                                <span class="starRating">
                                    <input id="rating5" type="radio" name="rating" value="5">
                                    <label for="rating5">5</label>
                                    <input id="rating4" type="radio" name="rating" value="4">
                                    <label for="rating4">4</label>
                                    <input id="rating3" type="radio" name="rating" value="3" checked="">
                                    <label for="rating3">3</label>
                                    <input id="rating2" type="radio" name="rating" value="2">
                                    <label for="rating2">2</label>
                                    <input id="rating1" type="radio" name="rating" value="1">
                                    <label for="rating1">1</label>
                                </span>
                                <button class="btn btn default">Change</button>
                            </form>
                        </div>
                        <div class="w3agile_description">
                            <h4>Description :</h4>
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="snipcart-item block">
                            <div class="snipcart-thumb agileinfo_single_right_snipcart">
                                <h4 class="m-sing">${{ $product->price }}</h4>
                            </div>
                            <div class="snipcart-details agileinfo_single_right_details">
                                @include('products.forms._add_to_cart')
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    <!-- new -->
        <div class="newproducts-w3agile">
            <div class="container">
                <h3>New offers</h3>
                    <div class="agile_top_brands_grids">
                        <div class="col-md-3 top_brand_left-1">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="products.html"><img title=" " alt=" " src="images/14.png"></a>     
                                                    <p>Fried-gram</p>
                                                    <div class="stars">
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                    </div>
                                                        <h4>$35.99 <span>$55.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                                                            <input type="hidden" name="amount" value="35.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 top_brand_left-1">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="products.html"><img title=" " alt=" " src="images/15.png"></a>     
                                                    <p>Navaratan-dal</p>
                                                    <div class="stars">
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                    </div>
                                                        <h4>$30.99 <span>$45.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="business" value=" ">
                                                                <input type="hidden" name="item_name" value="basmati rise">
                                                                <input type="hidden" name="amount" value="30.99">
                                                                <input type="hidden" name="discount_amount" value="1.00">
                                                                <input type="hidden" name="currency_code" value="USD">
                                                                <input type="hidden" name="return" value=" ">
                                                                <input type="hidden" name="cancel_return" value=" ">
                                                                <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 top_brand_left-1">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="products.html"><img src="images/16.png" alt=" " class="img-responsive"></a>
                                                    <p>White-peasmatar</p>
                                                    <div class="stars">
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                    </div>
                                                        <h4>$80.99 <span>$105.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Pepsi soft drink">
                                                            <input type="hidden" name="amount" value="80.00">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 top_brand_left-1">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="products.html"><img title=" " alt=" " src="images/17.png"></a>     
                                                    <p>Channa-dal</p>
                                                    <div class="stars">
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                    </div>
                                                        <h4>$35.99 <span>$55.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                                                            <input type="hidden" name="amount" value="35.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="clearfix"> </div>
                    </div>
            </div>
        </div>
    <!-- //new -->
    <!-- //footer -->
    
    @include('partials._footertop')

    @include('partials._footerbottom')
       
    <!-- //footer -->   
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */
                                    
                $().UItoTop({ easingType: 'easeOutQuart' });
                                    
                });
        </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.min.js"></script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
                            
                jQuery('#responsive').change(function(){
                  $('#responsive_wrapper').width(jQuery(this).val());
                });
                
            });
    </script>   
    <!-- //main slider-banner --> 

    </body>
    </html>
@endsection