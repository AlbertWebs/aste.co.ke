@extends('front.master')
@section('content')

@foreach ($SiteSettings as $Settings)
		
        <!-- Page Content -->
        <main class="page-main">
            <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
                <div class="container">
                    <h1 class="page-title">Privacy Policy<span>www.aste.co.ke</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/')}}/products-categories">Aste!</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            
            <div class="block">
                <div class="container">
                    
                    @foreach ($Privacy as $item)
                    <div class="entry-content editor-content">
                        <h3 class="no-line custom-color size-lg">{{$item->title}}</h3>
                        <div class="panel-group faq" id="Terms">
                            <div class="panel tab-content">
                                <div>
                                    <div class="panel-body">
                                        {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
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