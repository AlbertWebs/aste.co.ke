@extends('front.master')
@section('content')

@foreach ($SiteSettings as $Settings)
@foreach ($Product as $Product)
{{--  --}}
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item">
                    <?php $CategorlyLink = DB::table('categories')->where('id',$Product->category)->get(); ?>
                    @foreach ($CategorlyLink as $catlink)
                    <a href="{{url('/')}}/products/{{$catlink->slung}}">
                        {{$catlink->title}}
                    </a>
                    @endforeach
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$Product->name}}</li>
            </ol>
            <?php 
                    $productID = $Product->id;
                    $NextProductID = $productID+1;
                    $PrevProductID = $productID-1;
                    $FetchNext = DB::table('products')->where('id',$NextProductID)->get();
                    $FetchPreve = DB::table('products')->where('id',$PrevProductID)->get();
            ?>

            <nav class="product-pager ml-auto" aria-label="Product">
                @if($FetchPreve->isEmpty())

                    @else
                    @foreach ($FetchPreve as $fetchpre)
                    <a class="product-pager-link product-pager-prev" href="{{url('/')}}/product/{{$fetchpre->slung}}" aria-label="Previous" tabindex="-1">
                        <i class="icon-angle-left"></i>
                        <span>Prev</span>
                    </a>
                    @endforeach
                    @endif
                    @if($FetchNext->isEmpty())

                    @else
                    @foreach ($FetchNext as $fetchnext)

                        <a class="product-pager-link product-pager-next" href="{{url('/')}}/product/{{$fetchnext->slung}}" aria-label="Next" tabindex="-1">
                            <span>Next</span>
                            <i class="icon-angle-right"></i>
                        </a>

                        @endforeach
                    @endif
            </nav><!-- End .pager-nav -->
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="{{url('/')}}/uploads/products/{{$Product->image_one}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_one}}" alt="{{$Product->name}}">

                                    <a href="{{url('/')}}/uploads/products/{{$Product->image_one}}" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                </figure><!-- End .product-main-image -->

                                <div id="product-zoom-gallery" class="product-image-gallery">
                                    <a class="product-gallery-item active" href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_one}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_one}}">
                                        <img src="{{url('/')}}/uploads/products/{{$Product->image_one}}" alt="{{$Product->name}}">
                                    </a>

                                    @if($Product->image_two == null OR $Product->image_two =="0")

                                    @else
                                    <a class="product-gallery-item" href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_two}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_two}}">
                                        <img src="{{url('/')}}/uploads/products/{{$Product->image_two}}" alt="product cross">
                                    </a>
                                    @endif

                                    @if($Product->image_three == null OR $Product->image_three =="0")

                                    @else
                                    <a class="product-gallery-item" href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_three}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_three}}">
                                        <img src="{{url('/')}}/uploads/products/{{$Product->image_three}}" alt="product with model">
                                    </a>
                                    @endif

                                    @if($Product->image_four == null OR $Product->image_four =="0")

                                    @else
                                    <a class="product-gallery-item" href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_four}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_four}}">
                                        <img src="{{url('/')}}/uploads/products/{{$Product->image_four}}" alt="product back">
                                    </a>
                                    @endif
                                </div><!-- End .product-image-gallery -->
                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$Product->name}}</h1><!-- End .product-title -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( 0 Reviews )</a>
                            </div><!-- End .rating-container -->

                            <div class="product-price">
                                @if (session()->has('rates'))
                                    
                                        <?php
                                            $rates = Session::get('rates');
                                            $Rates = DB::table('rates')->where('rates',$rates)->get();
                                        ?>
                                        @foreach ($Rates as $rt)
                                            @if($Product->price == $Product->price_raw)
                                               {{$rt->symbol}} <?php $total = $Product->price*$rt->rates; echo ceil($total) ?>
                                            @else
                                                {{$rt->symbol}} <?php $total = $Product->price*$rt->rates; echo ceil($total) ?>
                                                <del>Was {{$rt->symbol}} <?php $total = $Product->price_raw*$rt->rates; echo ceil($total) ?></del>
                                            @endif
                                        @endforeach
                                    
                                @else
                                   
                                        @if($Product->price == $Product->price_raw)
                                            KES <?php $total = $Product->price; echo ceil($total) ?>
                                            
                                        @else
                                            <?php $total = $Product->price; echo ceil($total) ?><br>
                                           KES <del><?php $total = $Product->price_raw; echo ceil($total) ?></del>
                                        @endif
                                        <!-- End .price-box -->
                                @endif
                            </div><!-- End .product-price -->

                            <div class="product-content">
                                <p> {!! html_entity_decode($Product->meta, ENT_QUOTES, 'UTF-8') !!} </p>
                            </div><!-- End .product-content -->

                            <div class="details-filter-row details-row-size">
                                <label>Color:</label>
                                <div class="select-custom">
                                    <select name="size" id="size" class="form-control">
                                        <option value="#" selected="selected">Specify Your Colour On Checkout</option>
                                    </select>
                                </div><!-- End .select-custom -->
                                <div class="product-nav product-nav-thumbs">
                                    
                                </div><!-- End .product-nav -->
                            </div><!-- End .details-filter-row -->

                            <div class="details-filter-row details-row-size">
                                <label for="size">Size:</label>
                                <div class="select-custom">
                                    <select name="size" id="size" class="form-control">
                                        <option value="#" selected="selected">Specify Your Size On Checkout</option>
                                        <option value="s">Small</option>
                                        <option value="m">Medium</option>
                                        <option value="l">Large</option>
                                        <option value="xl">Extra Large</option>
                                    </select>
                                </div><!-- End .select-custom -->

                                <a target="new" href="{{url('/')}}/size-guide" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                            </div><!-- End .details-filter-row -->

                            <div class="details-filter-row details-row-size">
                                <label for="qty">Qty:</label>
                                <div class="product-details-quantity">
                                    <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                </div><!-- End .product-details-quantity -->
                            </div><!-- End .details-filter-row -->

                            <div class="product-details-action">
                                <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$Product->id}}" class="btn-product btn-cart"><span>add to cart</span></a>

                                <div class="details-action-wrapper">
                                    <a href="{{url('/')}}/shopping-cart/add-to-wishlist/{{$Product->id}}" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                    <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$Product->id}}" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                </div><!-- End .details-action-wrapper -->
                            </div><!-- End .product-details-action -->

                            <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Category:</span>
                                    <a href="{{url('/')}}/products/{{$catlink->slung}}">
                                        {{$catlink->title}}
                                    </a>,
                                    <a href="{{url('/')}}">Aste</a>
                                    
                                </div><!-- End .product-cat -->

                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Share:</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/product/{{$Product->slung}}" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="https://twitter.com/share?hashtags={{$Settings->sitename}},{{$catlink->title}}&text={{$Product->name}}&via={{$Settings->twitter}}" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/product/{{$Product->slung}}" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    {{-- <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a> --}}
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                    </li> --}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Product Information</h3>
                            {!! html_entity_decode($Product->content, ENT_QUOTES, 'UTF-8') !!}
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                        <div class="product-desc-content">
                            <h3>Information</h3>
                            <p>{!! html_entity_decode($Product->meta, ENT_QUOTES, 'UTF-8') !!}</p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                        <div class="product-desc-content">
                            <h3>Delivery & returns</h3>
                            <p>We deliver our products around the world. For full details of the delivery options we offer, please view our <a href="{{url('/')}}/delivery-policy">Delivery information</a><br>
                            We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="{{url('/')}}/return-policy">Returns information</a></p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                        <div class="reviews">
                            <h3>Reviews (2)</h3>
                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Samanta J.</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">6 days ago</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <h4>Good, perfect size</h4>

                                        <div class="review-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->

                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">John Doe</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">5 days ago</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <h4>Very good</h4>

                                        <div class="review-content">
                                            <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->
                        </div><!-- End .reviews -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->

            <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":5
                        },
                        "1200": {
                            "items":5,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>
                <?php $ProductsRelated = DB::table('products')->where('category',$Product->category)->get(); ?>
                @foreach ($ProductsRelated as $Trends)
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
                @endforeach

            
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
{{--  --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#post-reviews').submit(function(e){
            e.preventDefault();
            $('.loading-gif').show()  
            var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
            $.ajax({
                type: 'POST',
                url: "{{ url('/') }}/post-review",
                data: formdata, // here $(this) refers to the ajax object not form
                success: function (data)
                {
                    $('#post-reviews')[0].reset();
                    $('.loading-gif').hide() 
                    $('.alert-success').fadeIn("slow").html(data);
                    // $(dv).fadeOut("slow").html("");
                },
            });
            stay.preventDefault(); 
                })  
            })
</script>
@endforeach
@endforeach
@endsection