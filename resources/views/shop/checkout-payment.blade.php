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
                        {!!html_entity_decode($iframe)!!}

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

                            {{-- <a href="{{url('/')}}/shopping-cart/checkout" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a> --}}
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
