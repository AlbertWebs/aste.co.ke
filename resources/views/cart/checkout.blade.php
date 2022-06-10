@extends('front.master')
@section('content')
@foreach ($SiteSettings as $Settings)
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Checkout<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                {{-- <div class="checkout-discount">
                    <form action="#">
                        <input type="text" class="form-control" required id="checkout-discount-input">
                        <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
                    </form>
                    <p id="coupon-processing" style="color:#d62676; font-weight:600;">Processing....</p>
                </div><!-- End .checkout-discount --> --}}
                <form  id="updateSettings">
                    @csrf
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
                            <br><label>Last Notes:</label>
                            {!! html_entity_decode(Auth::user()->notes, ENT_QUOTES, 'UTF-8') !!}
                            <textarea class="form-control" cols="30" rows="4" name="notes" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>

                            <button  type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                <span class="btn-text"> Save Your Info <i class="icon-arrow-right"></i> </span>
                                <span class="btn-hover-text">Update Your Info</span>
                            </button>
                            <center><img class="spinner text-center" width="25" src="{{asset('uploads/icon/loading.gif')}}" alt=""></center>
                            <div id="saved" class="text-success text-center"></div>
                            </form>
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <?php $CartItems = \Cart::getContent(); ?>
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
                                                    {{$rt->symbol}} <?php $tt = Cart::getTotal(); $total = $tt*$rt->rates; echo ceil($total) ?></span>  
                                                    @endforeach
                                                @else
                                                KSH <?php $tt = Cart::getTotal();  echo $tt; ?>
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
                                                       {{$rt->symbol}} <?php $tt = Cart::getTotal(); $total = $tt*$rt->rates; echo ceil($total) ?>
                                                    @endforeach
                                                @else
                                                      KSH <?php $tt = Cart::getTotal();  echo $tt; ?>
                                                @endif
                                            </td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <div class="accordion-summary" id="accordion-payment">
                                    <div class="card">
                                        <div class="card-header" id="heading-1">
                                            <h2 class="card-title">
                                                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                    Direct bank transfer
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                <address>
                                                    <strong>
                                                        ACCOUNT NUMBER:<input onclick="this.select();" type='text' value='1234567890' /><br>
                                                        ACCOUNT NAME: <input onclick="this.select();" type='text' value='ASTE COMPANY LIMITED' /><br>
                                                        ACCOUNT BRANCH: <input onclick="this.select();" type='text' value='KILIMANI' /><br>
                                                    </strong>
                                                </address>
                                                {{-- <form method="POST" action="{{url('/')}}/verify-bank-payment"> --}}
                                                    <a href="{{url('/')}}/verify-bank-payment" onclick="return confirm('Proceed To Verify Payment')" type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                                        <span class="btn-text"> Verify Payment</span>
                                                        <span class="btn-hover-text">Submit Transaction Info</span>
                                                    </a>
                                                {{-- </form> --}}
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-2">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                    Checkout With M-PESA
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                <form id="stk_push_initiate" action="{{url('/')}}/api/v1/stk/push">
                                                    @csrf
                                                    <address>
                                                        <strong>
                                                        MPESA NUMBER:<input name="mobile" onclick="this.select();" type='text' placeholder="254" value='254 ' /><br>
                                                        
                                                        </strong>
                                                    </address>
                                                    <input type="hidden" name="amount" value="<?php $tt = Cart::getTotal();  echo $tt; ?>">
                                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                                        <span class="btn-text"> Pay Now</span>
                                                        <span class="btn-hover-text">Initiate Transaction</span>
                                                        <img class="loading-image" style="width:30px; margin-left:20px" src="{{url('/')}}/uploads/icon/loading.gif" alt="Aste Loading">
                                                    </button>
                                                    <p class="text-success"></p>
                                                </form>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-5">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                    Credit Card (Paypal)
                                                    {{-- <img src="{{asset('theme/assets/images/payments-summary.png')}}" alt="payments cards"> --}}
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                            <div class="card-body"> 
                                              
                                                {{--  --}}
                                                <form id="ShowPaypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="upload" value="1">
                                                    <?php $SiteSettings = DB::table('_site_settings')->get(); ?>
                                                    @foreach($SiteSettings as $Sett)
                                                    <input type="hidden" name="business" value="aste.co.ke@gmail.com">
                                                    @endforeach
                                                    <!-- Collect Data -->
                                                    <?php $Count = 1; ?>
                                                    @foreach($CartItems as $CartItem)
                                                    <?php
                                                        $Products = DB::table('products')->where('id',$CartItem->id)->get();
                                                    ?>
                                                    @foreach($Products as $Product)
                                                    <?php
                                                          $RawPrice = $Product->price;
                                                          $dollarPrice = dollar($Product->price);
                                                          $PaypalCont = 0.029;
                                                          $paypalCut = $PaypalCont*$dollarPrice;
                                                          $PaypalToatal = $paypalCut+$dollarPrice;

                                                     ?>
                                                    <input type="hidden" name="item_name_{{$Count}}" value="{{$Product->name}}">
                                                    <input type="hidden" name="amount_{{$Count}}" value="<?php echo $PaypalToatal; ?>"><?php $PaypalToatal; ?>
                                                    <input type="hidden" name="quantity_{{$Count}}" value="{{$CartItem->qty}}">
                                                    <input type="hidden" name="shipping_{{$Count}}" value="10">
                                                    @endforeach
                                                    <?php $Count = $Count+1;  ?>
                                                    @endforeach



                                                    <input type="hidden" name="cancel_return" id="cancel_return" value="https://aste.co.ke/shopping-cart/checkout/payment" />
                                                    <button  style="cursor:pointer" type="submit"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppcmcvdam.png" alt="Pay with PayPal Credit or any major credit card" /></button>
                                                  </form>
                                                {{--  --}}
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                    Cash on delivery
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                <form>
                                                    
                                                    <button type="button" onclick="location.href='{{url('/')}}/shopping-cart/place-order';" class="btn btn-outline-primary-2 btn-order btn-block">
                                                        <span class="btn-text"> Place Order</span>
                                                        <span class="btn-hover-text">Submit Your Order Now</span>
                                                    </button>
                                                </form>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    

                                    
                                </div><!-- End .accordion -->

                                <button onclick="location.href='{{url('/')}}';" type="button" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Continue Shopping</span>
                                    <span class="btn-hover-text">Go Back To Shop</span>
                                </button>
                                
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