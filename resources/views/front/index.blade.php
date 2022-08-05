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

            <div class="intro-slide" style="background-image: url({{asset('theme/assets/images/demos/demo-6/slider/pexels-artem-beliaikin-2534961.jpg')}});">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle text-white">Thinking Fashion</h3><!-- End .h3 intro-subtitle -->
                    <br>
                    <h1 class="intro-title text-white">Think ASTE</h1><!-- End .intro-title -->

                    <a href="{{url('/')}}/products" class="btn btn-outline-white-4">
                        <span>Discover More</span>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-theme -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    {{--  --}}
    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <br>
                    <h2 class="title">Our Story</h2><!-- End .title -->
                   
                    
                    <p class="mb-2" style="color:#000000">
                        Aste Company Limited was incorporated in 2021 with one goals.
                        <ol>
                            <li style="font-weight:600">To handmake leather & canvas gear with top quality and design.</li>
                        
                        </ol>
                        
                        Our name, Aste, means “majestic” in the Swahili slang and was chosen because of our goal to deliver the highest quality products. <br>
                        
                        <br>

                        We are located at Nairobi CBD,  At Aste we are working with multiple partners to best represent our brand across the globe.
                        <br>
                        <br> 
                    </p>

                    <a href="{{url('/')}}/products-categories" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                        <i class="icon-shopping-cart"></i>
                        <span>Shop Online</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .col-lg-5 -->

                <div class="col-lg-7 offset-lg-1">
                    <div class="about-imagess">
                        <img style="border:0px solid #d62676; border-radius:10px" src="{{url('/')}}/uploads/banners/amboseli.jpg" alt="Aste Company Limited">
                    </div><!-- End .about-images -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-light-2 pt-6 pb-6 -->

    {{--  --}}

 


    
    <div class="container">
        {{-- <hr class="mb-0"> --}}
       
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
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$Trends->id}}" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <?php $Category = DB::table('categories')->where('id',$Trends->category)->get(); ?>
                            @foreach ($Category as $item)
                            <div class="product-cat">
                                <a href="#">{{$item->title}}</a>
                            </div><!-- End .product-cat -->
                            @endforeach
                            <h3 class="product-title text-center"><a href="{{url('/')}}/product/{{$Trends->slung}}">{{$Trends->name}}</a></h3><!-- End .product-title -->
                            <div class="product-price price-center">
                                {{--  --}}
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
                                {{--  --}}
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                @endforeach

            
            </div><!-- End .row -->
        </div><!-- End .products -->

        <div class="more-container text-center mt-1 mb-3">
            <a href="{{url('/')}}/products-categories" class="btn btn-outline-primary-2 btn-round btn-more">Load more</a>
        </div><!-- End .more-container -->
    </div><!-- End .container -->
    {{--  --}}


    <div class="mb-2"></div><!-- End .mb-5 -->
    
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