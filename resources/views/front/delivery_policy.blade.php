@extends('front.master')
@section('content')

@foreach ($SiteSettings as $Settings)
		
        <!-- Page Content -->
        <main class="page-main">
            <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
                <div class="container">
                    <h1 class="page-title">Delivery Policy<span>www.aste.co.ke</span></h1>
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
                                            Thanks for stopping by! All you need to know about our delivery times can be found right on this page:
                                            <br><br>
                                            The delivery time starts from the day you place your order to the day one of our delivery associates makes a first attempt to deliver to you. *Only 1 attempt(s) will be done for delivery and the orders will be canceled after 3 days if not collected/communicated.
                                            <br><br>
                                           Orders are delivered with Courier Service of your choosing or with our Default Courier Wells Fargo.
                                            <br><br>
                                           You Can track your Order at <a href="{{url('/')}}/dashboard">Your dashboard</a> once your order has already been confirmed
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