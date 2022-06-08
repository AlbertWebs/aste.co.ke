@extends('front.master')
@section('content')
@foreach ($SiteSettings as $Settings)
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Complete Order<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Complete Order</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
            
                <form action="#">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Full Name *</label>
                                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Email address *</label>
                                        <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Company Name (Optional)</label>
                                        <input type="text" name="company" value="{{Auth::user()->company}}" class="form-control">
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Country *</label>
                                        <input type="text" name="country" value="{{Auth::user()->country}}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Street address *</label>
                                        <input type="text" name="address" value="{{Auth::user()->address}}" class="form-control" placeholder="House number and Street name" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Town / City *</label>
                                        <input type="text" name="town"  value="{{Auth::user()->town}}" class="form-control" required>
                                    </div>
                                </div>

                                

                                
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Postcode / ZIP *</label>
                                        <input value="{{Auth::user()->zip}}" name="zip" type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Phone *</label>
                                        <input value="{{Auth::user()->mobile}}" name="mobile" type="tel" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Order notes (optional)</label>
                                <textarea class="form-control" cols="30" rows="4" name="notes" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            </form>
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->
                                <?php
                                    $CartItems = Cart::getContent();
                                ?>
                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($CartItems as $item)
                                            <?php $Product = DB::table('products')->where('id',$item->id)->get(); ?> 
                                            @foreach ($Product as $product)
                                                <tr>
                                                    <td><a href="#">{{$product->name}}</a></td>
                                                    <td>
                                                        {{--  --}}
                                                        @if (session()->has('rates'))
                                                       
                                                            <?php
                                                                $rates = Session::get('rates');
                                                                $Rates = DB::table('rates')->where('rates',$rates)->get();
                                                            ?>
                                                            @foreach ($Rates as $rt)
                                                                
                                                                    {{$rt->symbol}} <?php $total = $product->price*$rt->rates; echo ceil($total) ?>
                                                                    
                                                             
                                                            @endforeach
                                                        </div>
                                                        @else
                                                            <div class="price-box">
                                                                
                                                                    KES <?php $total = $product->price; echo ceil($total) ?>
                                                              
                                                            
                                                        @endif
                                                        {{--  --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach

                                        
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
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>Free shipping</td>
                                        </tr>
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

                                

                                <a href="{{url('/')}}/shopping-cart/complete-order" onclick="return confirm('Place Order Now')" type="button" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Complete Order</span>
                                    <span class="btn-hover-text">Place Order Now</span>
                                </a>
                                <script>
                                    function clickShop(){
                                        window.open({{url('/')}});
                                    }
                                </script>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                {{-- </form> --}}
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endforeach
@endsection