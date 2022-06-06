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
            <div class="intro-slide" style="background-image: url({{asset('theme/assets/images/demos/demo-6/slider/slide-1.jpg')}});">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle text-white">You're Looking Good</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">New Lookbook</h1><!-- End .intro-title -->

                    <a href="category.html" class="btn btn-outline-white-4">
                        <span>Discover More</span>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide" style="background-image: url({{asset('theme/assets/images/demos/demo-6/slider/slide-2.jpg')}});">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle text-white">Don’t Miss</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">Mysrety Deals</h1><!-- End .intro-title -->

                    <a href="category.html" class="btn btn-outline-white-4">
                        <span>Discover More</span>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-theme -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="container pt-6 new-arrivals">
        <div class="row">
            <div class="col-lg-12 mb-3 mb-lg-0 about-us">
                <h2 class="title">About Aste</h2><!-- End .title -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. </p>
                <hr class="mb">
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
      
        <div class="mb-5"></div><!-- End .mb-4 -->
    </div>
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
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
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
                                    <?php
                                        $rates = Session::get('rates');
                                        $Rates = DB::table('rates')->where('rates',$rates)->get();
                                    ?>
                                    @foreach ($Rates as $rt)
                                        @if($Trends->price == $Trends->price_raw)
                                           <span>{{$rt->symbol}} <?php $total = $Trends->price*$rt->rates; echo ceil($total) ?></span>
                                        @else
                                            <span class="new-price">Now {{$rt->symbol}} <?php $total = $Trends->price*$rt->rates; echo ceil($total) ?></span>
                                            <span class="old-price">Was {{$rt->symbol}} <?php $total = $Trends->price_raw*$rt->rates; echo ceil($total) ?></span>
                                        @endif
                                    @endforeach
                                @else
                                    <div class="price-box">
                                        @if($Trends->price == $Trends->price_raw)
                                            <span class="new-price">Now  <?php $total = $Trends->price; echo ceil($total) ?></span>
                                            
                                        @else
                                            <span class="new-price">Now  <?php $total = $Trends->price; echo ceil($total) ?></span>
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

    <div class="mb-5"></div><!-- End .mb-5 -->

    <div class="deal bg-image pt-8 pb-8" style="background-image: url({{asset('theme/assets/images/demos/demo-6/deal/bg-1.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="deal-content text-center">
                        <h4>Limited quantities. </h4>
                        <h2>Deal of the Day</h2>
                        <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->
                    </div><!-- End .deal-content -->
                    <div class="row deal-products">
                        <div class="col-6 deal-product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-6/deal/product-1.jpg')}}" alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Elasticated cotton shorts</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $24.99</span>
                                    <span class="old-price">Was $30.99</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <a href="category.html" class="action">shop now</a>
                        </div>
                        <div class="col-6 deal-product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-6/deal/product-2.jpg')}}" alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Fine-knit jumper</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $8.99</span>
                                    <span class="old-price">Was $17.99</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <a href="category.html" class="action">shop now</a>
                        </div>
                    </div>
                </div><!-- End .col-lg-5 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .deal -->

    <div class="pt-4 pb-3" style="background-color: #222;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                            <p>Free shipping for orders over $50</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-rotate-left"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-unlock"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Secure Payment</h3><!-- End .icon-box-title -->
                            <p>100% secure payment</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                        <span class="icon-box-icon">
                            <i class="icon-headphones"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                            <p>Alway online feedback 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-light pt-2 pb-2 -->

    <div class="mb-6"></div><!-- End .mb-5 -->



    <div class="mb-2"></div><!-- End .mb-5 -->
    
    <div class="container">
    </div><!-- End .container -->

    {{--  --}}
</div><!--End .container-->

@include('front.new-arrival')
<hr>    
    
<div class="mb-2"></div><!-- End .mb-2 -->

<div class="container">
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