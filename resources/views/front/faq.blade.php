@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
		
        <!-- Page Content -->
        <main class="page-main">
            <div class="block">
                <div class="container">
                    <ul class="breadcrumbs">
                        <li><a href="index.html"><i class="icon icon-home"></i></a></li>
                        <li>/<span>Frequently Asked Questions</span></li>
                    </ul>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="title center">
                        <h1 class="size-lg">Frequently Asked Questions</h1>
                    </div>
                    @foreach ($Category as $item)
                    <?php $FAQ = DB::table('faq')->where('category',$item->id)->get(); ?>
                    @if($FAQ->isEmpty())
                    @else
                    <h2 class="no-line custom-color size-lg">{{$item->title}}</h2>
                    <div class="panel-group faq" id="{{$item->title}}">
                        @foreach ($FAQ as $faq)
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#{{$item->title}}" href="#{{$item->title}}{{$faq->id}}" class="collapsed">
                                    <span class="closed"><i>–</i></span>
                                    <span class="opened"><i>+</i></span>
                                    <div class="panel-title">
                                        {!! html_entity_decode($faq->title, ENT_QUOTES, 'UTF-8') !!}
                                    </div>
                                </a>
                            </div>
                            
                            <div id="{{$item->title}}{{$faq->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! html_entity_decode($faq->content, ENT_QUOTES, 'UTF-8') !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </main>
@endforeach
@endsection