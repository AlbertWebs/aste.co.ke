@extends('front.master')
@section('content')
@foreach ($SiteSettings as $Settings)
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
        <div class="container">
            <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <?php $Cart = \Cart::getContent(); ?>
    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($Cart as $item)
                                <?php $Product = DB::table('products')->where('id',$item->id)->get(); ?> 
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
                                                    <a href="#">Beige knitted elastic runner shoes</a>
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
                                                <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                            </div><!-- End .cart-product-quantity -->
                                        </td>
                                        <td class="total-col">
                                                 {{--  --}}
                                                 @if (session()->has('rates'))
                                                 <div class="price-box">
                                                     <?php
                                                         $rates = Session::get('rates');
                                                         $Rates = DB::table('rates')->where('rates',$rates)->get();
                                                     ?>
                                                     @foreach ($Rates as $rt)
                                                     {{$rt->symbol}}<?php $Price = $item->price*$rt->rates; $qty = $item->quantity; echo $Subtotal = $Price*$qty ?>
                                                      {{-- <?php $total = $product->price_raw*$rt->rates; echo ceil($total) ?> --}}
                                                     @endforeach
                                                 </div>
                                             @else
                                                 <div class="price-box">
                                                    KES<?php $Price = $item->price; $qty = $item->quantity; echo $Subtotal = $Price*$qty ?>
                                                    
                                                 </div><!-- End .price-box -->
                                             @endif
                                             {{--  --}}
                                        </td>
                                        <td class="remove-col"><a href="{{url('/')}}/shopping-cart/remove-cart/{{$product->id}}" class="btn-remove"><i class="icon-close"></i></a></td>
                                    </tr>
                                    @endforeach
                                @endforeach
                               
                            </tbody>
                        </table><!-- End .table table-wishlist -->

                    <?php
                        $CartItems = Cart::getContent();
                    ?>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>
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
                                        </td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-shipping">
                                        <td>Shipping:</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                <label title="Free Shipping Available Within Nairobi" class="custom-control-label" for="free-shipping">Free Shipping</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$0.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                                <label title="To Be Delivered To Your Home Town" class="custom-control-label" for="standart-shipping">Standart:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$10.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                                <label title="Pickup at the nearest G4S" class="custom-control-label" for="express-shipping">Express:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>$25.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-estimate">
                                        <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                        <td>&nbsp;</td>
                                    </tr><!-- End .summary-shipping-estimate -->

                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>
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
                                        </td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="{{url('/')}}/shopping-cart/checkout" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                        </div><!-- End .summary -->

                        <a href="{{url('/')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
    @include('front.instagram-feeds')
</main><!-- End .main -->	
@endforeach
@endsection
