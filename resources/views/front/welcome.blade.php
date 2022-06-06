<!DOCTYPE html>
<html lang="en">
    @foreach ($SiteSettings as $Settings)

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aste  - Classy Bags - Sandals - Shoes</title>
    <meta name="keywords" content="Aste -  Bags Sandals">
    <meta name="description" content="
    Aste offers a modern and sophisticated collection of apparel for Both Men and Women, We Make and Sell Bags and Sandals among other">
    <meta name="author" content="Designekta Studios">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
</head>

<body>
    <div class="soon">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-8">
                    <div class="soon-content text-center">
                        <div class="soon-content-wrapper">
                            <img src="{{url('/')}}/uploads/logo/logo.png" alt="Aste" class="soon-logo mx-auto">
                            <h1 class="soon-title">Coming Soon</h1><!-- End .soon-title -->
                            <div class="coming-countdown countdown-separator"></div><!-- End .coming-countdown -->
                            <hr class="mt-2 mb-3 mt-md-3">
                            <p>We are currently working on an awesome new site. Stay tuned for more information.
                                Subscribe to our newsletter to stay updated on our progress.</p>
                            <form action="{{url('/newsletter')}}" method="POST">
                                @csrf
                                <div class="input-group mb-5">
                                    <input type="email" name="email" class="form-control bg-transparent" placeholder="Enter your Email Address" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary-2" type="submit">
                                            <span>SUBSCRIBE</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                    </div>
                                    {{--  --}}
                                    
										{{--  --}}
										<?php
										$ops = array('-', '+');
										$answer = -1;
									
										$num1 = rand(0, 15);
										$num2 = rand(0, 15);

										$answer = $num1 + $num2;
										
										?>
										<div id="math">
											<input type="hidden" name="correct_answer" id="correct_answer" value="{{$answer}}">
											<input required class="form-control" value="{{$answer}}" type="hidden" id="verify_contact" name="verify_contacts">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label style="color:#000000">Are you human? {{$num1}} + {{$num2}} =</label>
														<input required autocomplete="off" required class="form-control" value="" type="text" id="verify_contact" name="verify_contact">
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<br>
                                        <script>
											function correctCaptcha(){
												var btn = document.getElementById("Button");
                                                btn.disabled = false;
												document.getElementById("math").style.display = "block";
												document.getElementById("TheCapcha").style.display = "none";
											}
										</script>
										{{--  --}}
                                    {{--  --}}
                                </div>
                            </form>
                            <div class="social-icons justify-content-center mb-0">
                                <a href="{{$Settings->facebook}}" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                                <a href="{{$Settings->twitter}}" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="{{$Settings->instagram}}" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                <a href="{{$Settings->youtube}}" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                                <a href="{{$Settings->linkedin}}" class="social-icon" target="_blank" title="linkedin"><i class="icon-linkedin"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .soon-content-wrapper -->
                    </div><!-- End .soon-content -->
                </div><!-- End .col-md-9 col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
        <div class="soon-bg bg-image" style="background-image: url({{asset('theme/assets/images/backgrounds/soon-bg.jpg')}})"></div>
        <!-- End .soon-bg bg-image -->
    </div><!-- End .soon -->
    <!-- Plugins JS File -->
    <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.countdown.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('theme/assets/js/main.js')}}"></script>
    <script>
    $(function() {
        "use strict";
        if ($.fn.countdown) {
            $('.coming-countdown').countdown({
                until: new Date(2022, 5, 11), // 7th month = August / Months 0 - 11 (January  - December)
                format: 'DHMS',
                padZeroes: true
            });

            // Pause
            // $('.coming-countdown').countdown('pause');
        }
    });
    </script>
    <script>
        // $(document).ready(function() {
        //     $("#math").hide();
        // });
        // $("#verify_contact").keyup(function(){
        //     $("#math").show();
        // });
    </script>
</body>

@endforeach
</html>