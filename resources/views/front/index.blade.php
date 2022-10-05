@extends('front.master')
@section('content')

@foreach ($SiteSettings as $Settings)
<main class="main">
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                "dots": false,
                "nav": false, 
                "responsive": {
                    "992": {
                        "nav": true
                    }
                }
            }'>
            {{-- <div class="intro-slide" style="background-image: url({{asset('theme/assets/images/demos/demo-6/slider/pexels-adrienne-andersen-2334906.jpg')}});">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle text-white">You're Looking Good</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">New Lookbook</h1><!-- End .intro-title -->

                    <a href="{{url('/')}}/products" class="btn btn-outline-white-4">
                        <span>Discover More</span>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide --> --}}

            <?php $Banners = DB::table('banners')->where('title','Slider')->get(); ?>
            @foreach ($Banners as $banner)
            <div class="intro-slide" style="background-image: url('{{asset('theme/assets/images/demos/demo-6/slider/')}}/{{$banner->image}}');">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle text-white">Leather Meets Canvas</h3><!-- End .h3 intro-subtitle -->
                    <br>
                    <h1 class="intro-title text-white">Think ASTE</h1><!-- End .intro-title -->

                    <a href="{{url('/')}}/products" class="btn btn-outline-white-4">
                        <span>Discover More</span>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
            @endforeach
        </div><!-- End .intro-slider owl-carousel owl-theme -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->
    <br>
    <div class="pt-3 pb-3">
        <div class="container">
            <div class="banner-group">
                <div class="row">
                    <div class="col-sm-6 col-lg-4" style="border-radius:10px">
                        <div class="banner banner-overlay banner-lg"  style="border-radius:10px">
                            <a href="#">
                                <img style="border-radius:10px" src="{{asset('uploads/banners/il_fullxfull.2094478646_1vpz.jpg')}}" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-bottom" style="border-radius:10px">
                                <h4 class="banner-subtitle text-white"><a  href="{{url('/')}}/products">Leather</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a style="text-shadow: 1px 1px 0px #000000;" href="{{url('/')}}/products">Handbags</a></h3><!-- End .banner-title -->
                                <div class="banner-text text-white"><a href="{{url('/')}}/products">from $89.00</a></div><!-- End .banner-text -->
                                <a href="#" style="border:2px solid #d62676; border-radius:10px;" class="btn btn-outline-white banner-link">Discover Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->

                    <div class="col-sm-6 col-lg-4 order-lg-last" style="border-radius:10px">
                        <div class="banner banner-overlay banner-lg" style="border-radius:10px">
                            <a href="#" style="border-radius:10px"> 
                                <img style="border-radius:10px" src="{{asset('uploads/banners/canvas.jpg')}}" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-top">
                                <h4 class="banner-subtitle text-white"><a href="#"></a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a style="text-shadow: 1px 1px 0px #000000;" href="#">Leather Meets Canvas</a></h3><!-- End .banner-title -->
                                <div class="banner-text text-white"><a href="#">from $99.00</a></div><!-- End .banner-text -->
                                <a style="border:2px solid #d62676; border-radius:10px;" href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->

                    <div class="col-12 col-lg-4">
                        <div class="row" style="border-radius:10px">
                            <div class="col-sm-6 col-lg-12" style="border-radius:10px">
                                <div class="banner banner-overlay" style="border-radius:10px">
                                    <a href="#">
                                        <img style="border-radius:10px" src="{{asset('uploads/banners/canvas-category.jpeg')}}" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-white"><a href="{{url('/')}}/products">Canvas</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a style="text-shadow: 1px 1px 0px #000000;" href="{{url('/')}}/products">Custom Canvas Wear</a></h3><!-- End .banner-title -->
                                        <a target="new" style="border:2px solid #d62676; border-radius:10px;" href="{{url('/')}}/products" class="btn btn-outline-white banner-link">Shop Now</a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 col-lg-12 -->

                            <div class="col-sm-6 col-lg-12">
                                <div class="banner banner-overlay" style="border-radius:10px">
                                    <a href="#">
                                        <img style="border-radius:10px" src="{{asset('uploads/banners/wallets.jpeg')}}" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-white"><a href="#"> </a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a style="text-shadow: 1px 1px 0px #000000;" href="#">Wallets and Belts</a></h3><!-- End .banner-title -->
                                        <a style="border:2px solid #d62676; border-radius:10px;" href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-sm-6 col-lg-12 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .banner-group -->

        </div><!-- End .container -->
    </div><!-- End .bg-lighter -->

    {{--  --}}
    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <br>
                    <h2 class="title">Our Story</h2><!-- End .title -->
                   
                    
                    <p class="mb-2" style="color:#000000">
                        @foreach ($About as $about)
                         {!! html_entity_decode($about->content, ENT_QUOTES, 'UTF-8') !!}
                        @endforeach
                    </p>

                    <a href="{{url('/')}}/products-categories" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                        <i class="icon-shopping-cart"></i>
                        <span>Shop Online</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .col-lg-5 -->

                <div class="col-lg-7 offset-lg-1">
                    <div class="about-imagess">
                        <?php $Banners = DB::table('banners')->where('title','About Us')->get(); ?>
                        @foreach ($Banners as $banner)
                         <img style="border:0px solid #d62676; border-radius:10px" src="{{url('/')}}/uploads/banners/{{$banner->image}}" alt="Aste Company Limited">
                        @endforeach
                    </div><!-- End .about-images -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-light-2 pt-6 pb-6 -->

    {{--  --}}

 


    
    {{-- <div class="container">
   
       
        <div class="products">
            <div class="row justify-content-center">
            

                @foreach ($Trending as $Trends)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="{{url('/')}}/product/{{$Trends->slung}}">
                                <img src="{{url('/')}}/uploads/products/{{$Trends->image_one}}" alt="Product image" class="product-image">
                                @if($Trends->image_two == null or $Trends->image_two == 0)

                                @else
                                <img src="{{url('/')}}/uploads/products/{{$Trends->image_two}}" alt="Product image" class="product-image-hover">
                                @endif
                            </a>

                            <div class="product-action-vertical">
                                <a href="{{url('/')}}/shopping-cart/add-to-wishlist/{{$Trends->id}}" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div>

                            <div class="product-action">
                                <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$Trends->id}}" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div>
                        </figure>

                        <div class="product-body text-center">
                            <?php $Category = DB::table('categories')->where('id',$Trends->category)->get(); ?>
                            @foreach ($Category as $item)
                            <div class="product-cat">
                                <a href="#">{{$item->title}}</a>
                            </div>
                            @endforeach
                            <h3 class="product-title text-center"><a href="{{url('/')}}/product/{{$Trends->slung}}">{{$Trends->name}}</a></h3>
                            <div class="product-price price-center">
                              
                                @if (session()->has('rates'))
                                    <div class="price-box">
                                        <?php
                                            $rates = Session::get('rates');
                                            $Rates = DB::table('rates')->where('rates',$rates)->get();
                                        ?>
                                        @foreach ($Rates as $rt)
                                            @if($Trends->price == $Trends->price_raw)
                                            <span>{{$rt->symbol}} <?php $total = $Trends->price*$rt->rates; echo ceil($total) ?></span>
                                            @else
                                                <span class="new-price">Now {{$rt->symbol}} <?php $total = $Trends->price*$rt->rates; echo ceil($total) ?></span><br>
                                                <span class="old-price">Was {{$rt->symbol}} <?php $total = $Trends->price_raw*$rt->rates; echo ceil($total) ?></span>
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <div class="price-box">
                                        @if($Trends->price == $Trends->price_raw)
                                            <span class="new-price">Now  <?php $total = $Trends->price; echo ceil($total) ?></span>
                                            
                                        @else
                                            <span class="new-price">Now  <?php $total = $Trends->price; echo ceil($total) ?></span><br>
                                            <span class="old-price">Was  <?php $total = $Trends->price_raw; echo ceil($total) ?></span>
                                        @endif
                                    </div>
                                @endif
                              
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            
            </div>
        </div>

        <div class="more-container text-center mt-1 mb-3">
            <a href="{{url('/')}}/products-categories" class="btn btn-outline-primary-2 btn-round btn-more">Load more</a>
        </div>
    </div> --}}
    {{--  --}}


    <div class="mb-2"></div><!-- End .mb-5 -->
    <div class="container pb-2">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Bags , Sandals  & Accessories</h2><!-- End .title -->
            </div><!-- End .heading-left -->

           <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="bags-women-link" data-toggle="tab" href="#bags-women-tab" role="tab" aria-controls="bags-women-tab" aria-selected="true">Leather Meets Canvas</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="bags-men-link" data-toggle="tab" href="#bags-men-tab" role="tab" aria-controls="bags-men-tab" aria-selected="false">Men's</a>
                    </li> --}}
                </ul>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="row">
            <div class="col-lg-3">
                <div class="banner banner-overlay product-banner">
                    <a href="#">
                        <img src="{{asset('theme/assets/images/demos/demo-9/banners/banner-6.jpg')}}" alt="banner image">
                    </a>
                    <div class="banner-content">
                        <div class="banner-top">
                            <div class="banner-title text-white text-center">
                                <i class="la la-star-o"></i><h3 class="text-white">Our Experts<br>Picks</h3>
                            </div>
                        </div>
                        <div class="banner-bottom">
                            
                            <div class="product-price">
                                <h4 class="text-white">$129.99</h4>
                            </div>
                            <div class="product-txt">
                                <p class="text-white">Cross Body Bag</p>
                            </div>
                            <a href="{{url('/')}}/products-categories" class="btn btn-outline-white banner-link">Shop Now</a>
                        </div>
                    </div>
                </div><!-- End .banner banner-overlay -->
            </div><!-- End .col-lg-3 -->
            
            <div class="col-lg-9">
                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="bags-women-tab" role="tabpanel" aria-labelledby="bags-women-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":3,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            @foreach ($Trending as $Trends)
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="{{url('/')}}/product/{{$Trends->slung}}">
                                        <img src="{{url('/')}}/uploads/products/{{$Trends->image_one}}" alt="Product image" class="product-image">
                                        @if($Trends->image_two == null or $Trends->image_two == 0)
        
                                        @else
                                        <img src="{{url('/')}}/uploads/products/{{$Trends->image_two}}" alt="Product image" class="product-image-hover">
                                        @endif
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="{{url('/')}}/shopping-cart/add-to-wishlist/{{$Trends->id}}" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
        

                                    <div class="product-action">
                                        <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$Trends->id}}" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <?php $Category = DB::table('categories')->where('id',$Trends->category)->get(); ?>
                                    @foreach ($Category as $item)
                                    <h3 class="product-title"><a href="#">{{$item->title}}</a></h3><!-- End .product-title -->
                                    @endforeach
                                    <div class="product-price">
                                        @if (session()->has('rates'))
                                            <div class="price-box">
                                                <?php
                                                    $rates = Session::get('rates');
                                                    $Rates = DB::table('rates')->where('rates',$rates)->get();
                                                ?>
                                                @foreach ($Rates as $rt)
                                                    @if($Trends->price == $Trends->price_raw)
                                                    <span>{{$rt->symbol}} <?php $total = $Trends->price*$rt->rates; echo ceil($total) ?></span>
                                                    @else
                                                        <span class="new-price">Now {{$rt->symbol}} <?php $total = $Trends->price*$rt->rates; echo ceil($total) ?></span><br>
                                                        <span class="old-price">Was {{$rt->symbol}} <?php $total = $Trends->price_raw*$rt->rates; echo ceil($total) ?></span>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="price-box">
                                                @if($Trends->price == $Trends->price_raw)
                                                    <span class="new-price">Now  <?php $total = $Trends->price; echo ceil($total) ?></span>
                                                    
                                                @else
                                                    <span class="new-price">Now  <?php $total = $Trends->price; echo ceil($total) ?></span><br>
                                                    <span class="old-price">Was  <?php $total = $Trends->price_raw; echo ceil($total) ?></span>
                                                @endif
                                            </div><!-- End .price-box -->
                                        @endif
                                    </div><!-- End .product-price -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            @endforeach
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="bags-men-tab" role="tabpanel" aria-labelledby="bags-men-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div>
            <div class="more-container text-center mt-1 mb-3">
                <a href="{{url('/')}}/products-categories" class="btn btn-outline-primary-2 btn-round btn-more">Load more</a>
            </div>
        </div>
    </div><!-- End .container -->
    
    <div class="container">
    </div><!-- End .container -->

    {{--  --}}
</div><!--End .container-->

{{-- @include('front.new-arrival')
<hr>     --}}
    
<div class="mb-2"></div><!-- End .mb-2 -->

<div class="container bg-light-2">
    <div class="cta cta-separator mb-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="cta-wrapper cta-text text-center">
                    <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                    <p class="cta-desc"> Follow us in our social media platforms and get updates on the latest offers </p><!-- End .cta-desc -->
            
                    <div class="social-icons social-icons-colored justify-content-center">
                        @foreach ($SiteSettings as $Settings)
                            <a href="{{$Settings->facebook}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="{{$Settings->twitter}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="{{$Settings->instagram}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="{{$Settings->youtube}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            <a href="{{$Settings->linkedin}}" class="social-icon social-linkedin" title="linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                        @endforeach
                    </div><!-- End .soial-icons -->
                </div><!-- End .cta-wrapper -->
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6">
                <div class="cta-wrapper text-center">
                    <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                    {{-- <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for first shopping</p><!-- End .cta-desc --> --}}
            
                    <form action="{{url('/newsletter')}}" method="post" id="news-letter">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-rounded" id="Button" type="submit" disabled="disabled"><i class="icon-long-arrow-right"></i></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                        {{--  --}}
                        <div class="form-group col-sm-12" style="padding:15px" id="TheCapcha">
                            {{-- <div class="col-lg-12 col-md-12" id="TheCapcha"> --}}
                                <div class="g-recaptcha" data-sitekey="6LdMt0kgAAAAAM2gr6fE9DlY1iI6-dOzwTKoH1B_" data-callback="correctCaptcha"></div>
                                <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                            {{-- </div> --}}
                        </div>
                        {{--  --}}
                        <script>
                            function correctCaptcha(){
                                var btn = document.getElementById("Button");
                                btn.disabled = false;
                                // document.getElementById("math").style.display = "block";
                                // document.getElementById("TheCapcha").style.display = "none";
                            }
                        </script>
                    </form>
                </div><!-- End .cta-wrapper -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .cta -->
</div><!-- End .container -->

@include('front.instagram-feeds')

</main><!-- End .main -->
@endforeach

@endsection