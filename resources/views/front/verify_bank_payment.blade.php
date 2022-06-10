@extends('front.master')
@section('content')
@foreach ($SiteSettings as $Settings)
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
        <div class="container">
            <h1 class="page-title">Veryfy Bank Payment<span>www.aste.co.ke</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Veryfy Bank Payment</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <main class="main">
        

        <div class="page-content">
            <div class="container">
       

                <hr class="mt-3 mb-5 mt-md-1">
                <div class="touch-container row justify-content-center">
                    <div class="col-md-9 col-lg-7">
                        <div class="text-center">
                      
                        </div><!-- End .text-center -->

                        <form action="#" class="contact-form mb-2" id="verifyBank">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="cname" class="sr-only">Name</label>
                                    <input value="{{Auth::user()->name}}" type="text" class="form-control" id="cname" placeholder="Name *" required>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-sm-12">
                                    <label for="cemail" class="sr-only">Email</label>
                                    <input value="{{Auth::user()->email}}"  type="email" class="form-control" id="cemail" placeholder="Email *" required>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-sm-12">
                                    <label for="cphone" class="sr-only">Phone</label>
                                    <input value="{{Auth::user()->mobile_one}}"  type="tel" class="form-control" id="cphone" placeholder="Phone">
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->

                          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <label for="cmessage" class="sr-only">Transaction Infomation</label>
                            <textarea class="form-control" cols="30" rows="4" name="transCode" id="cmessage" required placeholder="Transaction Code *"></textarea>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                    <span>SUBMIT</span>
                                    <i class="icon-long-arrow-right"></i>
                                    <center><img class="spinner text-center" width="25" src="{{asset('uploads/icon/loading.gif')}}" alt=""></center>
                                </button>
                                <p id="success-alert"></p>
                            </div><!-- End .text-center -->
                        </form><!-- End .contact-form -->
                    </div><!-- End .col-md-9 col-lg-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
  
    
    @include('front.instagram-feeds')
</main><!-- End .main -->	
@endforeach
@endsection
