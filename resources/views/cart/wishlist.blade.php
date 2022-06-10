@extends('front.master')
@section('content')
@foreach ($SiteSettings as $Settings)
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
        <div class="container">
            <h1 class="page-title">Your Wishlist<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Your Wishlist</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <?php 
         if(Auth::user()){
           $Cart = Wishlist::getUserWishList(Auth::user()->id);
         }else{
            $Cart = Wishlist::getUserWishList(\Request::ip());
         }
    ?>
    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Add To Cart</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($Cart as $item)
                                <?php $Product = DB::table('products')->where('id',$item->item_id)->get(); ?> 
                                    @foreach ($Product as $product)
                                    <tr>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="{{url('/')}}/product/{{$product->slung}}">
                                                        <img src="{{url('/')}}/uploads/products/{{$product->image_one}}" alt="{{$product->name}}">
                                                    </a>
                                                </figure>

                                                <h3 class="product-title">
                                                    <a href="#">{{$product->name}}</a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product -->
                                        </td>
                                        <td class="price-col">
                                            {{--  --}}
                                            @if (session()->has('rates'))
                                            <div class="price-box">
                                                <?php
                                                    $rates = Session::get('rates');
                                                    $Rates = DB::table('rates')->where('rates',$rates)->get();
                                                ?>
                                                @foreach ($Rates as $rt)
                                                    @if($product->price == $product->price_raw)
                                                    <span>{{$rt->symbol}} <?php $total = $product->price*$rt->rates; echo ceil($total) ?></span>
                                                    @else
                                                        <span class="new-price">Now {{$rt->symbol}} <?php $total = $product->price*$rt->rates; echo ceil($total) ?></span><br>
                                                        <span class="old-price">Was {{$rt->symbol}} <?php $total = $product->price_raw*$rt->rates; echo ceil($total) ?></span>
                                                    @endif
                                                @endforeach
                                            </div>
                                            @else
                                                <div class="price-box">
                                                    @if($product->price == $product->price_raw)
                                                        <span class="new-price">Now  <?php $total = $product->price; echo ceil($total) ?></span>
                                                        
                                                    @else
                                                        <span class="new-price">Now  <?php $total = $product->price; echo ceil($total) ?></span><br>
                                                        <span class="old-price">Was  <?php $total = $product->price_raw; echo ceil($total) ?></span>
                                                    @endif
                                                </div><!-- End .price-box -->
                                            @endif
                                            {{--  --}}
                                        </td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$product->id}}" class="btn btn-primary btn-round">Add To Cart</a>
                                            </div><!-- End .cart-product-quantity -->
                                        </td>
                                        
                                        <td class="remove-col">
                                            <a href="{{url('/')}}/shopping-cart/remove-wishlist/{{$item->item_id}}" class="btn btn-primary btn-round">
                                                Remove
                                           </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                               
                            </tbody>
                        </table><!-- End .table table-wishlist -->

                    
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
    @include('front.instagram-feeds')
</main><!-- End .main -->	
@endforeach
@endsection
