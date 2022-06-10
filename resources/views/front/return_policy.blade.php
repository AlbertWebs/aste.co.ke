@extends('front.master')
@section('content')

@foreach ($SiteSettings as $Settings)
		
        <!-- Page Content -->
        <main class="page-main">
            <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
                <div class="container">
                    <h1 class="page-title">Return Policy<span>www.aste.co.ke</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/')}}/products-categories">Aste!</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Return Policy</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            
            <div class="block">
                <div class="container">
                    
                    @foreach ($Privacy as $item)
                    <div class="entry-content editor-content">
                        {{-- <h3 class="no-line custom-color size-lg">{{$item->title}}</h3> --}}
                        <div class="panel-group faq" id="Terms">
                            <div class="panel tab-content">
                                <div>
                                    <div class="panel-body">
                                        <p>
                                            You can initiate a return within 2 days after delivery / collection for Eligible reasons or Change of mind:
                                            Eligible reasons - wrong, damaged, defective, incomplete, wrong-size, and counterfeit items can be returned (Ensure items are reported within the shortest time possible to facilitate an easy return process).
                                            "Change of mind"- You can return items if you change your mind but refunds will only be processed if the package seal is still intact and if the product is in no way tampered with.
                                            <br><br>
                                            When returning an item, Ensure all seals, tags and accessories are left intact and item is in its original packaging.
                                            If you have created a password on the device you wish to return, please ensure it is removed, otherwise, your return will be invalid.
                                            Events and Tickets are not eligible for return.
                                            <br><br>
                                            Get your refund faster when you drop off your return at the nearest www.aste.co.ke dropoff station.
                                            <br><br>
                                            All card refunds are immediately credited to your www.aste.co.ke account and you can spend this amount on any shop on www.aste.co.ke. Please note that you can request a refund back to your card at any time by contacting www.aste.co.ke via our channels. We will process your request within 48 working hours. Once this is done, It'll take at least 3-5 days more for the refund to reflect in your card statement
                                            <br><br>
                                            Orders delivered through Kenya Postal Service (only available for www.aste.co.ke Global items, clearly indicated at checkout when selected delivery method) will not be eligible for return for change of mind.
                                            <br><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
@endforeach
@endsection