@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
@foreach ($Product as $Product)
<main class="page-main">
    <div class="block">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>
                <li>/
                    <?php $CategorlyLink = DB::table('categories')->where('id',$Product->category)->get(); ?>
                    @foreach ($CategorlyLink as $catlink)
                    <a href="{{url('/')}}/products/{{$catlink->slung}}">
                        {{$catlink->title}}
                    </a>
                    @endforeach
                </li>
                <li>/<span>{{$Product->name}}</span></li>
                <?php 
                    $productID = $Product->id;
                    $NextProductID = $productID+1;
                    $PrevProductID = $productID-1;
                    $FetchNext = DB::table('products')->where('id',$NextProductID)->get();
                    $FetchPreve = DB::table('products')->where('id',$PrevProductID)->get();
                ?>
                <li class="product-nav">
                    @if($FetchPreve->isEmpty())

                    @else
                    @foreach ($FetchPreve as $fetchpre)
                    <i class="icon icon-angle-left"></i><a href="{{url('/')}}/product/{{$fetchpre->slung}}" class="product-nav-prev">prev product
                        <span class="product-nav-preview">
                            <span class="image"><img src="{{url('/')}}/uploads/products/{{$fetchpre->image_one}}" alt=""><span class="price">${{$fetchpre->price}}.00</span></span>
                            <span class="name">{{$fetchpre->name}}</span>
                        </span></a>/
                    @endforeach
                    @endif
                    @if($FetchNext->isEmpty())

                    @else
                    @foreach ($FetchNext as $fetchnext)
                    <a href="{{url('/')}}/product/{{$fetchnext->slung}}" class="product-nav-next">next product
                        <span class="product-nav-preview">
                            <span class="image"><img src="{{url('/')}}/uploads/products/{{$fetchnext->image_one}}" alt=""><span class="price">${{$fetchnext->price}}.00</span></span>
                            <span class="name">{{$fetchnext->name}}</span>
                        </span></a><i class="icon icon-angle-right"></i>
                    @endforeach
                    @endif
                </li>
            </ul>
        </div>
    </div>
    
    <div class="block product-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Product Gallery -->
                    <div class="main-image">
                        <img src="{{url('/')}}/uploads/products/{{$Product->image_one}}" class="zoom" alt="" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_one}}" />
                        <div class="dblclick-text"><span>Double click for enlarge</span></div>

                        @if($Product->video == null)
                        @else
                        <a href="{{$Product->video}}" class="video-link"><i class="icon icon-film"></i></a>
                        @endif
                        <a href="{{url('/')}}/uploads/products/{{$Product->image_one}}" class="zoom-link"><i class="icon icon-zoomin"></i></a>
                    </div>
                    <div class="product-previews-wrapper">
                        <div class="product-previews-carousel" id="previewsGallery">
                            <a href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_one}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_one}}"><img src="{{url('/')}}/uploads/products/{{$Product->image_one}}" alt="" /></a>
                            <a href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_two}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_two}}"><img src="{{url('/')}}/uploads/products/{{$Product->image_two}}" alt="" /></a>
                            <a href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_three}}" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_three}}"><img src="{{url('/')}}/uploads/products/{{$Product->image_three}}" alt="" /></a>

                        </div>
                    </div>
                    <!-- /Product Gallery -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-8">
                    <div class="product-info-block classic">
                        <div class="product-info-top">
                            <div class="product-sku">SKU: <span>{{$Product->sku}}</span></div>
                            <div class="rating">
                                <i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star"></i><span class="count">18 reviews</span>
                            </div>
                        </div>
                        <div class="product-name-wrapper">
                            <h1 class="product-name">{{$Product->name}}</h1>
                            <div class="product-labels">
                                <span class="product-label sale">SALE</span>
                                <span class="product-label new">NEW</span>
                            </div>
                        </div>
                        <div class="product-availability">Availability: <span>{{$Product->stock}}</span></div>
                        <div class="product-description">
                            <p>{{$Product->meta}}</p>
                        </div>
                        {{-- Discount Area --}}
                        {{-- <div class="countdown-circle hidden-xs">
                            <div class="countdown-wrapper">
                                <div class="countdown" data-promoperiod="0"></div>
                                <div class="countdown-text">
                                    <div class="text1">Discount 45% OFF</div>
                                    <div class="text2">Hurry, there are only <span>14</span> item(s) left!</div>
                                </div>
                            </div>
                        </div> --}}
                        <?php $CheckVariations = DB::table('variations')->where('product_id',$Product->id)->get(); ?>
                        @if($CheckVariations->isEmpty())
                        <div class="product-description">
                            <p>{!! html_entity_decode($Product->content, ENT_QUOTES, 'UTF-8') !!}</p>
                        </div>
                        @else
                        <div class="product-options">
                            <div class="product-size swatches">
                                <span class="option-label">Size:</span>
                                <div class="select-wrapper-sm">
                                    <select class="form-control input-sm size-variants">
                                        <?php $Size = DB::table('variations')->where('type','size')->where('product_id',$Product->id)->get(); ?>
                                        @foreach ($Size as $size)
                                        <option value="{{$size->value}}">{{$size->value}} - ${{$size->price}}.00 USD</option>
                                        @endforeach
                                    </select>
                                </div>
                                <ul class="size-list">
                                    
                                    @foreach ($Size as $size)
                                        @if($size->status == '1')
                                        <li><a href="{{url('/')}}/product-variation/{{$size->id}}" data-value='{{$size->value}}'><span class="value">{{$size->value}}</span></a></li>
                                        @else 
                                        <li class="absent-option"><a href="{{url('/')}}/product-variation/{{$size->id}}" data-value='{{$size->value}}'><span class="value">{{$size->value}}</span></a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="product-color swatches">
                                <span class="option-label">Color:</span>
                                <div class="select-wrapper-sm">
                                    <select class="form-control input-sm">
                                        <?php $Color = DB::table('variations')->where('type','color')->where('product_id',$Product->id)->get(); ?>
                                        @foreach ($Color as $item)
                                        <option value="{{$item->value}}">{{$item->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <ul class="color-list">
                                    @foreach ($Color as $item)
                                    @if($item->status == '1')
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="{{$item->value}}" data-value="{{$item->value}}" data-image="{{url('/')}}/uploads/variations/{{$item->image}}"><span class="value"><img src="{{url('/')}}/uploads/variations/{{$item->image}}" alt=""></span></a></li>
                                    @else 
                                    <li class="absent-option"><a href="#" data-toggle="tooltip" data-placement="top" title="{{$item->value}}" data-value="{{$item->value}}" data-image="{{url('/')}}/uploads/variations/{{$item->image}}"><span class="value"><img src="{{url('/')}}/uploads/variations/{{$item->image}}" alt=""></span></a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            {{-- <div class="product-qty">
                                <span class="option-label">Qty:</span>
                                <div class="qty qty-changer">
                                    <fieldset>
                                        <input type="button" value="&#8210;" class="decrease">
                                        <input type="text" class="qty-input" value="1" data-min="0">
                                        <input type="button" value="+" class="increase">
                                    </fieldset>
                                </div>
                            </div> --}}
                        </div>
                        @endif
                        <div class="product-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <div class="product-meta">
                                        <span><a href="#"><i class="icon icon-heart"></i> Add to wishlist</a></span>
                                        <span><a href="#"><i class="icon icon-balance"></i> Add to Compare</a></span>
                                    </div> --}}
                                    <div class="social">
                                        <div class="share-button toLeft">
                                            <span class="toggle">Share</span>
                                            <ul class="social-list">
                                                <?php $Cat = DB::table('categories')->where('id',$Product->category)->get(); ?>
                                                @foreach ($Cat as $cat) 
    
                                                @endforeach
                                                <li>
                                                    <a target="new" href="https://twitter.com/share?hashtags={{$Settings->sitename}},{{$cat->title}}&text={{$Product->name}}&via={{$Settings->twitter}}" class="icon icon-twitter-logo twitter"></a>
                                                </li>
                                                <li>
                                                    <a target="new" href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/product/{{$Product->slung}}" class="icon icon-facebook-logo facebook"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="price">
                                        {{-- <span class="old-price"><span>$140.00</span></span> --}}
                                        <span class="special-price"><span>${{$Product->price}}.00</span></span>
                                    </div>
                                    <div class="actions">
                                        <button 
                                          onclick="addToCartNow(this)" 
                                          data-product="{{$Product->id}}"
                                          data-loading-text='<i class="icon icon-spinner spin"></i><span>Add to cart</span>'
                                          class="btn btn-lg btn-loading add-to-cart">
                                          <i class="icon icon-cart"></i>
                                          <span>Add to cart</span>
                                        </button>
                                        <a target="new" href="{{url('/')}}/product/{{$Product->slung}}" class="btn btn-lg product-details"><i class="icon icon-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="tabaccordion">
            <div class="container">
                <!-- Nav tabs -->
                <ul class="nav-tabs product-tab" role="tablist">
                    <li><a href="#Tab1" role="tab" data-toggle="tab">Description</a></li>
                    <li><a href="#Tab2" role="tab" data-toggle="tab">Extra Info</a></li>
                    <li><a href="#Tab3" role="tab" data-toggle="tab">Order & Delivery</a></li>
                    <li><a href="#Tab4" role="tab" data-toggle="tab">Categories</a></li>
                    <li><a href="#Tab5" role="tab" data-toggle="tab">Reviews</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="Tab1">
                       {{-- Description Goes Here --}}
                       {!! html_entity_decode($Product->content, ENT_QUOTES, 'UTF-8') !!}
                       {{-- End of Description --}}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Tab2">
                        <p><strong class="custom-color">Condition:  </strong>{{$Product->pro_condition}}</p>
                        <p><strong class="custom-color">Stock Status:  </strong>{{$Product->stock}}</p>
                        <?php $Category = DB::table('categories')->where('id',$Product->category)->get(); ?>
                        @foreach ($Category as $Category)
                        <p><strong class="custom-color">Category:  </strong>{{$Category->title}}</p>
                        @endforeach
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Tab3">
                        <h3>Order & Delivery</h3>
                        <div class="table-responsive">
                            {!! html_entity_decode($Settings->risks, ENT_QUOTES, 'UTF-8') !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Tab4">
                        <ul class="tags">
                            <?php $Category = DB::table('categories')->get(); ?>
                            @foreach ($Category as $Category)
                            <li><a href="{{url('/')}}/products/{{$Category->slung}}"><span class="value"><span>{{$Category->title}}</span></span></a></li>
                            @endforeach
                        </ul>
                        <div class="divider"></div>
                        {{-- <h3>Add your tag</h3>
                        <form class="contact-form white" action="#">
                            <label>Tag<span class="required">*</span></label>
                            <input class="form-control input-lg">
                            <div>
                                <button class="btn btn-lg">Submit Tag</button>
                            </div>
                            <div class="required-text">* Required Fields</div>
                        </form> --}}
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Tab5">
                        <form id="post-reviews" class="contact-form white" action="{{url('/')}}">
                            @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td class="text-center">1 star</td>
                                        <td class="text-center">2 star</td>
                                        <td class="text-center">3 star</td>
                                        <td class="text-center">4 star</td>
                                        <td class="text-center">5 star</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Price</strong></td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-price1" type="radio" name="vote_price" value="1"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-price2" type="radio" name="vote_price" value="2"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-price3" type="radio" name="vote_price" value="3"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-price4" type="radio" name="vote_price" value="4"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-price5" type="radio" name="vote_price" value="5"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Value</strong></td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-value1" type="radio" name="vote_value" value="1"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-value2" type="radio" name="vote_value" value="2"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-value3" type="radio" name="vote_value" value="3"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-value4" type="radio" name="vote_value" value="4"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-value5" type="radio" name="vote_value" value="5"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Quality</strong></td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-quality1" type="radio" name="vote_quality" value="1"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-quality2" type="radio" name="vote_quality" value="2"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-quality3" type="radio" name="vote_quality" value="3"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-quality4" type="radio" name="vote_quality" value="4"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="radio">
                                                <input id="vote-quality5" type="radio" name="vote_quality" value="5"><span class="outer"><span class="inner"></span></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>Add new review</h3>
                            @honeypot
                            <label>Review<span class="required">*</span></label>
                            <input type="hidden" value="{{$Product->id}}" name="product_id">
                            <textarea name="content" class="form-control input-lg" required></textarea>
                            <div>
                                <button type="submit" class="btn btn-lg">Submit Review <img class="loading-gif" width="30" src="{{url('/')}}/uploads/icon/loading.gif" alt=""></button>
                            </div>
                            <div class="required-text">* Required Fields</div>
                        </form>
                        <div class="alert-success"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="block">
        <div class="container">
            <div class="row">
                <?php $Blogs = DB::table('blogs')->limit(3)->orderBy('id','DESC')->get(); ?>
                <div class="col-md-6">
                    <!-- Blog Carousel -->
                    <div class="title">
                        <h2>From Blog</h2>
                        <div class="carousel-arrows"></div>
                    </div>
                    <?php $Blog = DB::table('blogs')->limit(4)->inRandomOrder()->get(); ?>
                    <!-- Blog Carousel Item -->
                    <div class="blog-carousel">
                        @foreach ($Blog as $item)
                        <div class="blog-item">
                            <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo" src="{{url('/')}}/uploads/blogs/{{$item->image_one}}" alt="From Blog"> </a>
                            <div class="blog-item-info">
                                <a href="blog.html" class="blog-item-title">{{$item->title}}</a>
                                <div class="blog-item-teaser">{{$item->meta}}</div>
                                <div class="blog-item-links"> <span class="pull-left"> <span><a href="{{url('/')}}/latest-news/{{$item->slung}}" class="readmore">Read more</a></span> </span> <span class="pull-right"> <span>Post by <a href="#">{{$item->author}}</a></span> </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /Blog Carousel Item -->
                    </div>
                    <!-- /Blog Carousel -->
                </div>
                <?php $ProductsRelated = DB::table('products')->where('category',$Product->category)->get(); ?>
                <div class="col-md-6">
                    <!-- Deal Carousel -->
                    <div class="title">
                        <h2 class="custom-color">Related Products</h2>
                        <div class="toggle-arrow"></div>
                        <div class="carousel-arrows"></div>
                    </div>
                    <div class="collapsed-content">
                        <div class="deal-carousel-2 products-grid product-variant-5">
                            @foreach ($ProductsRelated as $item)
                                <!-- Product Item -->
                            <div class="product-item large">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>New</span></div>
                                            <!-- /Product Label -->
                                            <!-- product main photo -->
                                            <!-- product inside carousel -->
                                            <div class="carousel-inside slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="#"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$item->image_one}}" alt="{{$item->name}}"></a>
                                                    </div>
                                                  
                                                </div>
                                                {{-- <a class="carousel-control next"></a>
                                                <a class="carousel-control prev"></a> --}}
                                            </div>
                                            <!-- /product inside carousel -->
                                            <a href="{{url('/')}}/quick-view/{{$item->id}}" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a>
                                            <!-- /product main photo  -->
                                            <!-- Product Actions -->
                                            {{-- <a href="#" title="Add to Wishlist" class="no_wishlist"> <i class="icon icon-heart"></i><span>Add to Wishlist</span> </a> --}}
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a target="new" href="https://twitter.com/share?url={{url('/')}}/product/{{$item->slung}}" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a target="new" href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/product/{{$item->slung}}" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"> <a title="{{$item->name}}" href="{{url('/')}}/product/{{$item->slung}}" class="product-item-link">{{$item->name}}</a> </div>
                                            <div class="product-item-description">{{$item->meta}}</div>
                                            <div class="price-box"> <span class="price-container"> <span class="price-wrapper"><span class="price">${{$item->price}}</span> </span>
                                                </span>
                                            </div>
                                            <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
                                            <button id="option" onclick="addToCart(this)" class="btn add-to-cart" data-product="{{$item->id}}"> <i class="icon icon-cart"></i><span>Add to Cart</span> <img class="loading-gif" width="30" src="{{url('/')}}/uploads/icon/loading.gif" alt=""></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            @endforeach
                        </div>
                    </div>
                    <!-- /Deal Carousel -->
                </div>
            </div>
        </div>
    </div>
</main>
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