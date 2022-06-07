
<div class="bg-lighter pt-7 pb-4" style="background-color: #fafafa;">
    <div class="container">
        <div class="instagram-feed-container">
            <div class="row">
                <?php $Count = 0; ?>
                @isset($data['instagram_feed'])
                    @foreach ($data['instagram_feed'] as  $image)
                    @if($Count == 2)
                    <div class="feed-col feed-col-title">
                        <div class="instagram-feed-title">
                            <i class="icon-instagram"></i>
                            <p>@ASTE <br>on instagram</p>
                            <a href="https://www.instagram.com/aste.co.ke/">FOLLOW</a>
                        </div><!-- End .instagram-feed-title -->
                    </div><!-- End .feed-col -->
                    @else
                    <div class="feed-col">
                        <div class="instagram-feed">
                            <img class="insta" src="{{$image['url']}}" alt="img">
                            <div class="instagram-feed-content" style="text-align:center">
                                <a target="new" href="{{$image['permalink']}}">{{$image['caption']}}</a>
                                {{-- <a href="#"><i class="icon-comments"></i>45</a> --}}
                            </div><!-- End .instagram-feed-content -->
                        </div><!-- End .instagram-feed -->
                    </div><!-- End .feed-col -->
                    
                    @endif
                    <?php $Count = $Count+1 ?>
                    @endforeach
                @endisset
                
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