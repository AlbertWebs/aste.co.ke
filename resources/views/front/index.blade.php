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
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-5-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-5-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothing</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Tie-detail top</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">Now $3.99</span>
                                <span class="old-price">Was $6.99</span>
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-6-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-6-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $12.99
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-7-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-7-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Bags</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Small bucket bag</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $14.99
                            </div><!-- End .product-price -->

                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="{{asset('theme/assets/images/demos/demo-6/products/product-7-thumb.jpg')}}" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="{{asset('theme/assets/images/demos/demo-6/products/product-7-2-thumb.jpg')}}" alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-8-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-8-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothing</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $34.99
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-9-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-9-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothing</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">BShort wrap dress</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $17.99
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-10-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-10-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothing</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $34.99
                            </div><!-- End .product-price -->

                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="{{asset('theme/assets/images/demos/demo-6/products/product-10-thumb.jpg')}}" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="{{asset('theme/assets/images/demos/demo-6/products/product-10-2-thumb.jpg')}}" alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-11-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-11-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Loafers</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $9.99
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-sale">sale</span>
                            <a href="product.html">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-12-1.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('theme/assets/images/demos/demo-6/products/product-12-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Clothing</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">Now $12.99</span>
                                <span class="old-price">Was $17.99</span>
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .products -->

        <div class="more-container text-center mt-1 mb-3">
            <a href="#" class="btn btn-outline-primary-2 btn-round btn-more">Load more</a>
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

<div class="container pt-6 new-arrivals">
    <div class="heading heading-center mb-3">
        <h2 class="title">New Arrivals</h2><!-- End .title -->

        <ul class="nav nav-pills justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="new-cloth-link" data-toggle="tab" href="#new-cloth-tab" role="tab" aria-controls="new-cloth-tab" aria-selected="false">Clothing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="new-shoes-link" data-toggle="tab" href="#new-shoes-tab" role="tab" aria-controls="new-shoes-tab" aria-selected="false">Shoes & Boots</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="new-access-link" data-toggle="tab" href="#new-access-tab" role="tab" aria-controls="new-access-tab" aria-selected="false">Accessories</a>
            </li>
        </ul>
    </div><!-- End .heading -->

    <div class="tab-content">
        <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-5-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-5-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Linen-blend dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #e5dcb1;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #b9cbd8;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-6-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-6-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Sandals with lacing</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $70.00</span>
                                    <span class="old-price">Was $155.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-7-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-7-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Paper bag trousers</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #9fac76;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-8-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-8-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Handbags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Paper straw shopper</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $398.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-9-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-9-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Handbags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Bucket bag</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $350.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #e3a84d;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #f48a5b;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-10-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-10-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Silk-blend kaftan</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    Now $370.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-11-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-11-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Linen-blend jumpsuit</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $595.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-12-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-12-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $120.00</span>
                                    <span class="old-price">Was $140.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-cloth-tab" role="tabpanel" aria-labelledby="new-cloth-link">
            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-5-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-5-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Linen-blend dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #e5dcb1;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #b9cbd8;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-7-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-7-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Paper bag trousers</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #9fac76;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-10-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-10-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Silk-blend kaftan</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    Now $370.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-11-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-11-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Clothing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Linen-blend jumpsuit</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $595.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-shoes-tab" role="tabpanel" aria-labelledby="new-shoes-link">
            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-6-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-6-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Sandals with lacing</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $70.00</span>
                                    <span class="old-price">Was $155.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-12-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-12-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Now $120.00</span>
                                    <span class="old-price">Was $140.00</span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-access-tab" role="tabpanel" aria-labelledby="new-access-link">
            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-8-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-8-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Handbags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Paper straw shopper</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $398.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-9-1.jpg')}}" alt="Product image" class="product-image">
                                    <img src="{{asset('theme/assets/images/demos/demo-5/products/product-9-2.jpg')}}" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-transparent">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Handbags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Bucket bag</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $350.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #e3a84d;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #f48a5b;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->

    
</div><!-- End .container -->
    
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
                    <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for first shopping</p><!-- End .cta-desc -->
            
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-rounded" type="submit"><i class="icon-long-arrow-right"></i></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>
                </div><!-- End .cta-wrapper -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .cta -->
</div><!-- End .container -->

<div class="bg-lighter pt-7 pb-4" style="background-color: #fafafa;">
    <div class="container">
        <div class="instagram-feed-container">
            <div class="row">
                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/1.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>387</a>
                            <a href="#"><i class="icon-comments"></i>45</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/2.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>691</a>
                            <a href="#"><i class="icon-comments"></i>87</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col feed-col-title">
                    <div class="instagram-feed-title">
                        <i class="icon-instagram"></i>
                        <p>@ASTE <br>on instagram</p>
                        <a href="#">FOLLOW</a>
                    </div><!-- End .instagram-feed-title -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/3.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>321</a>
                            <a href="#"><i class="icon-comments"></i>54</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/4.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>44</a>
                            <a href="#"><i class="icon-comments"></i>55</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/5.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>128</a>
                            <a href="#"><i class="icon-comments"></i>99</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/6.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>433</a>
                            <a href="#"><i class="icon-comments"></i>25</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/7.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>588</a>
                            <a href="#"><i class="icon-comments"></i>44</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/8.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>87</a>
                            <a href="#"><i class="icon-comments"></i>23</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->

                <div class="feed-col">
                    <div class="instagram-feed">
                        <img src="{{asset('theme/assets/images/demos/demo-5/instagram/9.jpg')}}" alt="img">

                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>87</a>
                            <a href="#"><i class="icon-comments"></i>23</a>
                        </div><!-- End .instagram-feed-content -->
                    </div><!-- End .instagram-feed -->
                </div><!-- End .feed-col -->
            </div><!-- End .row -->
        </div><!-- End .instagra-feed-container -->

        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-rocket"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                        <p>Free shipping for orders over $50</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-4 -->
            
            <div class="col-sm-6 col-lg-4">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-refresh"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                        <p>Free 100% money back guarantee</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-4 -->

            <div class="col-sm-6 col-lg-4">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-life-ring"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                        <p>Alway online feedback 24/7</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .bg-lighter pt-5 pb-5 -->

</main><!-- End .main -->
@endforeach

@endsection