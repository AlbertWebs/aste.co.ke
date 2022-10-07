<div class="container instagram">
    <div class="heading text-center">
        <h2 class="title title-lg">Follow Us On Instagram</h2><!-- End .title -->
        <p class="title-desc">Wanna share your style with us?</p><!-- End .title-desc -->
    </div><!-- End .heading -->
</div><!-- End .container -->

<div class="owl-carousel owl-simple" data-toggle="owl" 
    data-owl-options='{
        "nav": false, 
        "dots": false,
        "autoplay": true, 
        "autoplayTimeout": 5000, 
        "autoplayHoverPause": true, 
        "items": 6,
        "margin": 3,
        "loop": true,
        "responsive": {
            "0": {
                "items":1
            },
            "360": {
                "items":2
            },
            "600": {
                "items":3
            },
            "992": {
                "items":4
            },
            "1200": {
                "items":5
            },
            "1500": {
                "items":6
            }
        }
    }'>

    @isset($data['instagram_feed'])
        @foreach ($data['instagram_feed'] as  $image)
        <div class="instagram-feed">
            <img src="{{$image['url']}}" alt="img">
    
            <div class="instagram-feed-content">
                <a href="#"><i class="icon-heart-o"></i>466</a>
                <a href="#"><i class="icon-comments"></i>65</a>
            </div><!-- End .instagram-feed-content -->
        </div><!-- End .instagram-feed -->
    
        @endforeach
    @endisset
</div><!-- End .owl-carousel -->