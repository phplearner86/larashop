@extends('layouts.app')

@section('content')
    <!-- header -->


    @include('partials._logo')
<!-- //header -->
<!-- navigation -->
    @include('partials._main_nav')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Products</li>
            </ol>
        </div>
    </div>
{{-- _______________________________________________________________________ --}}
    <div class="products">
        <div class="container">
            <div class="col-md-4 products-left">
                @include('partials._sidebar')
            </div>

            <div class="col-md-8 products-right">

                <div class="products-right-grid">
                    <div class="products-right-grids">
                        <div class="sorting">
                            <form action="" method="POST">

                                {{ csrf_field() }}

                                <select id="sort" class="frm-field required sect" name="sort">
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option> 
                                    <option value="name"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by name</option>                    
                                    <option value="price"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price</option>                             
                                </select>
                                <button class="btn btn-default">Change</button>
                            </form>
                        </div>
                            <div class="sorting-left">
                                <form action="" method="POST">
                                    {{ csrf_field() }}
                                    <select id="country1" class="frm-field required sect" name="per_page">
                                        <option value=3><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 3</option>
                                        <option value=6><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 6</option> 
                                        <option value=9><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 9</option>                   
                                        <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>All</option>                               
                                    </select>
                                    <button class="btn btn default">Change</button>
                                </form>
                            </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                
                @if ($products)
            
                @foreach ($products->chunk(3) as $chunk)
                    <div class="row">
                     
                    @foreach ($chunk as $product)

                        <div class="agile_top_brands_grids">
                            <div class="col-md-4 top_brand_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="images/offer.png" alt=" " class="img-responsive">
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="{{ route('products.show', $product->slug) }}"><img title=" " alt=" " src="images/hh4.png"></a>      
                                                        <p>{{ $product->name }}</p>
                                                        <h4>$35.99 <span>${{ $product->price_formatted }}</span></h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="#" method="post">
                                                            <fieldset>

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

                        </div>
                    @endforeach
                    </div>
                @endforeach        

                @else
                <p>No products</p>
                @endif

                <div class="text-center">
                    {{-- @if ($products->count()>1) --}}
                        {{ $products->appends(Request::input())->links() }}
                    {{-- @endif --}}
                </div>
                
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

<!--- __________________________________________________________________________ --->
<!-- //footer -->

    @include('partials._footertop')
  
    @include('partials._footerbottom')
   
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
@endsection