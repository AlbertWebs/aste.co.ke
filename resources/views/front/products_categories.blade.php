@extends('front.master')
@section('content')

@foreach ($SiteSettings as $Settings)
       		
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
        <div class="container">
            <h1 class="page-title">{{$Title}}<span>www.aste.co.ke</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/')}}/products-categories">Aste!</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$Title}}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="toolbox">
                        
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                        <div class="row justify-content-center">
                           
                        @foreach ($Products as $Trends)
                        <div class="col-6 col-md-4 col-lg-3" style="border-radius:10px">
                            <div class="product product-7 text-center" style="border-radius:10px">
                                <figure class="product-media" style="border-radius:10px">
                                    @if($Trends->stock == "Out Of Stock")
                                    <span class="product-label label-out">Out of Stock</span>
                                    @else

                                    @endif
                                    <a href="product.html">
                                        <img style="border-radius:10px" src="{{url('/')}}/uploads/products/{{$Trends->image_one}}" alt="Product image" class="product-image">
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

                                <div class="product-body">
                                    <?php $Category = DB::table('categories')->where('id',$Trends->category)->get(); ?>
                                    @foreach ($Category as $item)
                                    <div class="product-cat">
                                        <a href="#">{{$item->title}}</a>
                                    </div><!-- End .product-cat -->
                                    @endforeach
                                   
                                    <h3 class="product-title text-center"><a href="{{url('/')}}/product/{{$Trends->slung}}">{{$Trends->name}}</a></h3>
                                    <div class="product-price price-center">
                                        {{-- <span class="out-price">$120.00</span> --}}
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
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-lg-4 -->
                        @endforeach
                            
                        </div><!-- End .row -->
                    </div><!-- End .products -->

                    <?php echo $Products ?>
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endforeach

@endsection

