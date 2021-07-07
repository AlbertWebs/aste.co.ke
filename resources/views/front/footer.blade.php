<footer class="page-footer variant4 fullboxed">
    <div class="footer-top bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- newsletter -->
                    <div class="newsletter variant3">
                        <div class="footer-logo">
                            <img width="175" src="{{url('/')}}/uploads/logo/{{$Settings->logo_footer}}">
                        </div>
                        <div>
                         
                            <!-- input-group -->
                            <form action="https://aste-aste.us1.list-manage.com/subscribe/post?u=a5960b37f55a6506458121c1c&amp;id=426ba32c96" method="post" target="_blank" novalidate>
                                <div class="input-group">
                                    {{-- <input type="text" name="EMAIL" class="form-control"> --}}
                                    <input autocomplete="off"  type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required>
                                    {{-- <input autocomplete="off" type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL"> --}}
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="icon icon-close-envelope"></i></button>
                                        </span>
                                </div>
                            </form>
                            <!-- /input-group -->
                            <br><hr>
                            <h3>Welcome To {{$Settings->sitename}}</h3>
                            <p style="max-width:540px;">{{$Settings->welcome}}</p>
                        </div>
                    </div>
                    <!-- /newsletter -->
                </div>
                <div class="col-md-3">
                    <h3><span class="custom-color">Aste</span> Blog </h3>
                    <?php $LatestBlogs = DB::table('blogs')->limit(2)->orderBy('id','DESC')->get(); ?>
                    @foreach ($LatestBlogs as $item)
                    <div class="news-item">
                        <div class="news-date">21.10.06</div>
                        <h4 class="news-title">{{$item->title}}</h4>
                        <div class="news-text">
                            <p>{{$item->meta}}</p>
                            <p><a href="{{url('/')}}/latest-news/{{$item->slung}}" class="readmore">Read more</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-3">
                    <h3>Twitter</h3>
                    <a class="twitter-timeline" href="https://twitter.com/albertmuhatia" data-chrome="transparent nofooter noborders noheader noscrollbar" data-tweet-limit="1" data-widget-id="677235277925113856">Tweets by @albertmuhatia</a>
                    <script>
                        ! function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>INFORMATION</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="marker-list">
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li><a href="{{url('/')}}/frequently-asked-questions">FAQ</a></li>
                                <li><a href="{{url('/')}}/products">All Products</a></li>
                                <li><a href="{{url('/')}}/latest-news">Our Blog</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>MY ACCOUNT</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="marker-list">
                                <li><a href="{{url('/')}}/register">Create Account</a></li>
                                <li><a href="{{url('/')}}/customer">Login</a></li>
                                <li><a href="{{url('/')}}/shopping-cart">My cart</a></li>
                                <li><a href="{{url('/')}}/customer/orders">My Orders</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>Important Infomation</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="marker-list">
                                <li><a href="{{url('/')}}/terms-and-conditions">Terms and Conditions</a></li>
                                <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                                <li><a href="{{url('/')}}/copyright-statement">Copyright Statement</a></li>
                                <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>CONTACT US</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="simple-list">
                                <li><i class="icon icon-phone"></i>{{$Settings->mobile_one}}</li>
                                <li><i class="icon icon-close-envelope"></i><a href="mailto:{{$Settings->email}}">{{$Settings->email}}</a></li>
                                <li><i class="icon icon-clock"></i>8:00 - 19:00, Monday - Saturday</li>
                            </ul>
                            <div class="footer-social">
                                <a href="#"><i class="icon icon-facebook-logo icon-circled"></i></a> <a href="#"><i class="icon icon-twitter-logo icon-circled"></i></a> <a href="#"><i class="icon icon-skype-logo icon-circled"></i></a> <a href="#"><i class="icon icon-vimeo icon-circled"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-6 col-lg-7">
                    <div class="image-banner text-center">
                        <a href="#"> <img src="{{asset('theme/images/banners/footer-banner.jpg')}}" alt="Footer Banner" class="img-responsive"> </a>
                    </div>
                </div> --}}
                <div class=" col-md-12 col-lg-12">
                    <div class="footer-copyright text-center"> © <?php echo date('Y') ?> {{$Settings->sitename}}. All Rights Reserved | Powered By <a href="https://designekta.com">Designekta Studios</a> </div>
                    <div class="footer-payment-link text-center">
                        
                        <a href="#"><img src="{{asset('theme/images/payment-logo/icon-pay-6-mpesa.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('theme/images/payment-logo/icon-pay-1.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('theme/images/payment-logo/icon-pay-2.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('theme/images/payment-logo/icon-pay-3.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('theme/images/payment-logo/icon-pay-4.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>