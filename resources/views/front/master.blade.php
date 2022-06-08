<!DOCTYPE html>
<html lang="en">
@foreach ($SiteSettings as $Settings)

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aste Fashions</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    @include('favicon')
    <link rel="stylesheet" href={{asset('theme/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}>
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href={{asset('theme/assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('theme/assets/css/plugins/owl-carousel/owl.carousel.css')}}>
    <link rel="stylesheet" href={{asset('theme/assets/css/plugins/magnific-popup/magnific-popup.css')}}>
    <link rel="stylesheet" href={{asset('theme/assets/css/plugins/jquery.countdown.css')}}>
    <!-- Main CSS File -->
    <link rel="stylesheet" href={{asset('theme/assets/css/style.css')}}>
    <link rel="stylesheet" href={{asset('theme/assets/css/skins/skin-demo-6.css')}}>
    <link rel="stylesheet" href={{asset('theme/assets/css/demos/demo-6.css')}}>
    <link rel="stylesheet" href="{{asset('theme/assets/css/demos/demo-fix.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/demos/demo-5.css')}}">
    {{--  --}}
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6299e1b0b0d10b6f3e758114/1g4khj6m6';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->
    {{--  --}}
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-6">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <ul class="top-menu top-link-menu d-none d-md-block">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:{{$Settings->mobile_one}}"><i class="icon-phone"></i>Call: {{$Settings->mobile_one}}</a></li>
                                    <li><a href="mailto:{{$Settings->email}}"><i class="icon-envelope"></i>Call: {{$Settings->email}}</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="social-icons social-icons-color">
                            <a href="{{$Settings->facebook}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="{{$Settings->twitter}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="{{$Settings->linkedin}}" class="social-icon social-linkedin" title="linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                            <a href="{{$Settings->instagram}}" class="social-icon social-instagram" title="Pinterest" target="_blank"><i class="icon-instagram"></i></a>
                        </div><!-- End .soial-icons -->
                        <ul class="top-menu top-link-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    @if(Auth::user())
                                    <a href="{{url('/')}}/dashboard">Welcome Back! {{Auth::user()->name}}</a>
                                    @else
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                        

                        <div class="header-dropdown">
                            @if (session()->has('rates'))
                                <a href="#">
                                    <?php
                                        $rates = Session::get('rates');
                                        $Rates = DB::table('rates')->where('rates',$rates)->get();
                                    ?>
                                    @foreach ($Rates as $rt)
                                        {{$rt->currency}}
                                    @endforeach
                                </a>
                            @else
                                <a href="#">KES</a>
                            @endif
                            <div class="header-menu">
                                <ul>
                                    <li><a  href="{{url('/')}}/currency-swap/KES">KES</a></li>
                                    <li><a href="{{url('/')}}/currency-swap/USD">USD</a></li>
                                    <li><a href="{{url('/')}}/currency-swap/GBP">GBP</a></li>
                                    
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                {{-- <ul>
                                    <li><a id="lang" href="#">English</a></li>
                                </ul> --}}
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-right -->
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product or category..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                    <div class="header-center">
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{url('/')}}/uploads/logo/logo.png" alt="{{$Settings->sitename}}" width="200" height="45">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <a href="wishlist.html" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                            <span class="wishlist-txt">My Wishlist</span>
                        </a>

                        <?php
                           $CartItems = Cart::getContent();
                        ?>
                        @if($CartItems->isEmpty())
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">0</span>
                                <span class="cart-txt"> 0,00</span>
                            </a>
                        </div><!-- End .cart-dropdown -->
                        @else
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">{{ $CartItems->count() }}</span>
                                {{--  --}}
                                @if (session()->has('rates'))
                                    <?php
                                        $rates = Session::get('rates');
                                        $Rates = DB::table('rates')->where('rates',$rates)->get();
                                    ?>
                                    @foreach ($Rates as $rt)  
                                      <span class="cart-txt">{{$rt->symbol}} <?php $tt = Cart::getTotal(); $total = $tt*$rt->rates; echo ceil($total) ?></span>  
                                    @endforeach
                                @else
                                <span class="cart-txt">KSH <?php $tt = Cart::getTotal();  echo $tt; ?></span>
                                @endif
                                {{--  --}}
                                
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    @foreach($CartItems as $CartItem)
                                        <?php
                                            $ProductsForCart = DB::table('products')->where('id', $CartItem->id)->get();
                                        ?>
                                        @foreach($ProductsForCart as $Product)
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="{{url('/')}}/product/{{$Product->slung}}">{{$Product->name}}</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">{{$CartItem->quantity}}</span>
                                                        x  @if (session()->has('rates'))

                                                        <?php
                                                            $rates = Session::get('rates');
                                                            $Rates = DB::table('rates')->where('rates', $rates)->get();
                                                        ?>
                
                                                        @foreach ($Rates as $rt)
                
                                                            {{$rt->symbol}}<?php $total = $Product->price * $rt->rates;
                                                            echo ceil($total) ?>
                
                                                        @endforeach
                
                                                    @else
                                                         ksh {{$Product->price}}
                                                    @endif
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure style="height:60px; width:60px" class="product-image-container">
                                                    <a href="{{url('/')}}/product/{{$Product->slung}}" class="product-image">
                                                        <img width="50" height="50" src="{{url('/')}}/uploads/products/{{$Product->image_one}}" alt="{{$Product->name}}">
                                                    </a>
                                                </figure>
                                                <a href="{{url('/')}}/shopping-cart/remove-from-cart/{{$Product->id}}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            </div><!-- End .product -->
                                        @endforeach
                                    @endforeach

                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">
                                        @if (session()->has('rates'))
                                        <?php
                                            $rates = Session::get('rates');
                                            $Rates = DB::table('rates')->where('rates',$rates)->get();
                                        ?>
                                        @foreach ($Rates as $rt)  
                                        {{$rt->symbol}} <?php $tt = Cart::getTotal(); $total = $tt*$rt->rates; echo ceil($total) ?>  
                                        @endforeach
                                    @else
                                    KSH <?php $tt = Cart::getTotal();  echo $tt; ?></span>
                                    @endif
                                    </span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{url('/')}}/shopping-cart" class="btn btn-primary">View Cart</a>
                                    <a href="{{url('/')}}/shopping-cart/checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                        @endif
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows" style="margin:0 auto !important">
                                <li class="megamenu-container active">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <?php $Categories = DB::table('categories')->get(); ?>
                                @foreach ($Categories as $cat)
                                <li>
                                    <a href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->title}}</a>
                                </li>
                                @endforeach
                                <li>
                                    <a href="{{url('/')}}/dashboard">Track Order</a>
                                </li>
                                <li>
                                    <a href="tel:{{$Settings->mobile_one}}"><i class="icon-phone"></i> Call Us</a>
                                </li>
                                <li>
                                    <a href="tel:{{$Settings->email}}"><i class="la la-envelope"></i> Mail Us</a>
                                </li>
                                
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        {{-- <i class="la la-lightbulb-o"></i><p>Offers Up to 30% Off</span></p> --}}
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        @yield('content')

        <footer class="footer footer-2">
            <div class="footer-middle text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="widget widget-about">
                                <h4 class="widget-title">{{$Settings->sitename}}</h4><!-- End .widget-title -->
                                {!! html_entity_decode($Settings->welcome, ENT_QUOTES, 'UTF-8') !!}
                                <br><br>
                                {{--  --}}
                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <a href="tel:{{$Settings->mobile_one}}">{{$Settings->mobile_one}}</a><span class="widget-about-title">Got Question? Call us 24/7</span>
                                            
                                        </div><!-- End .col-sm-6 -->
                                        <div class="col-sm-6 col-md-8">
                                            <div class="social-icons social-icons-colored justify-content-center">
                                                <a href="{{$Settings->facebook}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="{{$Settings->twitter}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="{{$Settings->instagram}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                                <a href="{{$Settings->twitter}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                                <a href="{{$Settings->linkedin}}" class="social-icon social-linkedin" title="linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                                          </div>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div>
                                {{--  --}}
                                
                              <!-- End .soial-icons -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                       

                        <div class="col-sm-6 col-lg-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Your Cart</a></li>
                                    <li><a href="#">Aste</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            
            {{--  --}}
            <div class="footer-bottom">
                <div class="container">
                   
                    <ul class="footer-menu">
                        <p class="footer-copyrights">Copyright © <?php echo date('Y') ?> {{$Settings->sitename}}. All Rights Reserved.</p> &nbsp;
                        {{-- <li><a href="#"> <!-- End .footer-copyright --></a></li> --}}
                        <li><a href="{{url('/')}}/terms-and-conditions">Terms Of Use</a></li>
                        <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                    </ul>
                    <!-- End .footer-menu -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">We are Social </span>
                        <a href="{{$Settings->facebook}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        <a href="{{$Settings->twitter}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="{{$Settings->instagram}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="{{$Settings->youtube}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                       
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div>
            {{--  --}}
        </footer><!-- End .footer -->
        
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <?php $Categories = DB::table('categories')->get(); ?>
                    @foreach ($Categories as $cat)
                    <li>
                        <a href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->title}}</a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{url('/')}}/dashboard">Track Order</a>
                    </li>
                    <li>
                        <a href="tel:{{$Settings->mobile_one}}"><i class="icon-phone"></i> Call Us</a>
                    </li>
                    <li>
                        <a href="tel:{{$Settings->email}}"><i class="la la-envelope"></i> Mail Us</a>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="{{$Settings->facebook}}" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="{{$Settings->twitter}}" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="{{$Settings->instagram}}" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="{{$Settings->youtube}}" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                <a href="{{$Settings->linkedin}}" class="social-icon" target="_blank" title="linkedin"><i class="icon-linkedin"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="{{url('/google')}}" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="{{url('/facebook')}}" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

 
    <!-- Plugins JS File -->
    <script src={{asset('theme/assets/js/jquery.min.js')}}></script>
    <script type="text/javascript">
        $(document).ready(function(){
          
            $('.loading-image').hide();
            $('.spinner').hide();
            
        });

        // this is the id of the form
        $("#stk_push_initiate").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');
            $('.loading-image').show();
            
            setTimeout(function() {
                $('.text-success').html("Check your m-pesa phone.....")
            }, 2000);
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), 
                success: function(data) {
                    setTimeout(function() {
                        $('.text-success').html("Successful!  Redirecting....")
                        $('.loading-image').hide();
                    }, 1000);
                   
                    setTimeout(function() {
						window.location = "{{url('shopping-cart/place-order')}}"
                    }, 5000);
                }
            });

        });

        
        
        
    </script>
    <script>
        $('#updateSettings').on('submit', function (e) {
          $('.spinner').show();
              e.preventDefault();
                  $.ajax({
                      type: 'post',
                      url: '{{url('/')}}/dashboard/update-settings',
                      data: $('#updateSettings').serialize(),
                          success: function ($results) {
                              // alert('Verification Was Successfull')
                              $('#success-alert').html('The Purchase Was Successfull')
                              $('#veryfyID').html('Successfull')
                              $('#saved').html('Successfull')
                              $('.spinner').hide();
                            //   setTimeout(function() {
                            //     window.open('{{url('/')}}/shopping-cart/payment','_self')
                            //   }, 5000);
                            //   
                          }
                  });

          });

    </script>
    
    <script src={{asset('theme/assets/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('theme/assets/js/jquery.hoverIntent.min.js')}}></script>
    <script src={{asset('theme/assets/js/jquery.waypoints.min.js')}}></script>
    <script src={{asset('theme/assets/js/superfish.min.js')}}></script>
    <script src={{asset('theme/assets/js/owl.carousel.min.js')}}></script>
    <script src={{asset('theme/assets/js/bootstrap-input-spinner.js')}}></script>
    <script src={{asset('theme/assets/js/jquery.plugin.min.js')}}></script>
    <script src={{asset('theme/assets/js/jquery.magnific-popup.min.js')}}></script>
    <script src={{asset('theme/assets/js/jquery.countdown.min.js')}}></script>
    <!-- Main JS File -->
    <script src={{asset('theme/assets/js/main.js')}}></script>
    <script src={{asset('theme/assets/js/demos/demo-6.js')}}></script>

    {{--  --}}
    <script type="text/javascript">
        $('#newsletterz').on('submit', function(e) {
            e.preventDefault(); 
            var email = $('#email').val();
            alert(email)
            $.ajax({
                type: "POST",
                url: host+'/newsletter',
                data: {email:email}
                success: function( msg ) {
                    alert( msg );
                }
            });
        });
    </script>
    {{--  --}}

    {{--  --}}
    {{-- Translator --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $("#lang").click(
            //
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {pageLanguage: 'en'},
                    'google_translate_element'
                );

            //
            });
        })

    </script>

    <!-- Live Search Scripts -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.loading-image').hide();
        });
        $('#search').on('keyup',function(){
            // Add preloader
            $('.loading-image').show();
            $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '{{url('/')}}/search',
            data:{'search':$value},
            success:function(data){
            $('.loading-image').hide();
            $('tbody').html(data);
            }
            });
        })
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    {{-- Google Translate --}}

    
    {{--  --}}
</body>

@endforeach

</html>

