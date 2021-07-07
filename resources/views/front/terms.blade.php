@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
	
        <!-- Page Content -->
        <main class="page-main">
            <div class="block">
                <div class="container">
                    <ul class="breadcrumbs">
                        <li><a href="index.html"><i class="icon icon-home"></i></a></li>
                        <li>/<span>Terms and Conditions</span></li>
                    </ul>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="title center">
                        <h1 class="size-lg">Terms and Conditions</h1>
                    </div>
                    @foreach ($Terms as $item)
                    <h2 class="no-line custom-color size-lg">{{$item->title}}</h2>
                    <div class="panel-group faq" id="Terms">
                        
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#Terms" href="#Terms{{$item->id}}" class="collapsed">
                                    <span class="closed"><i>–</i></span>
                                    <span class="opened"><i>+</i></span>
                                    <div class="panel-title">
                                        {!! html_entity_decode($item->title, ENT_QUOTES, 'UTF-8') !!}
                                    </div>
                                </a>
                            </div>
                            
                            <div id="Terms{{$item->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! html_entity_decode($item->content, ENT_QUOTES, 'UTF-8') !!}
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