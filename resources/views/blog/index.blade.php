@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
	<!-- Page Content -->
    <main class="page-main">
        <div class="container">
            <!-- Page Title -->
            <div class="page-title">
                <div class="title center">
                    <h1>{{$page_title}}</h1>
                </div>
                <div class="text-wrapper">
                    <p class="text-center">{!! html_entity_decode($Settings->welcome, ENT_QUOTES, 'UTF-8') !!}</p>
                </div>
            </div>
            <!-- /Page Title -->
            <!-- Blog grid -->
            <div class="blog-grid-2">
                @foreach($Blog as $blog)
                <div class="blog-post">
                    <div class="blog-photo">
                        <a href="#"><img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="{{$blog->title}}"></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title"><a href="{{url('/')}}/latest-news/{{$blog->slung}}">{{$blog->title}}</a></h2>
                        <div class="blog-meta">
                            <div class="pull-left">
                                <span>{{$blog->title}}</span>
                                <?php 
                                    $RawDate = $blog->created_at;
                                    $FormatDate = strtotime($RawDate);
                                    $Month = date('M',$FormatDate);
                                    $Date = date('D',$FormatDate);
                                    $date = date('d',$FormatDate);
                                    $Year = date('Y',$FormatDate);
                                ?>
                                
                                <span>{{$Month}} {{$date}}, {{$Year}}</span>
                                <span> 
                                    <?php $Cat = DB::table('categories')->where('id',$blog->category)->get(); ?>
                                    @foreach ($Cat as $cat) 
                                      In {{$cat->title}}
                                    @endforeach
                                    By <a href="#">{{$blog->author}}</a></span>
                            </div>
                            <div class="pull-right">
                                <div class="share-button toRight">
                                    <span class="toggle">Share</span>
                                    <ul class="social-list">                                
                                        <li>
                                            <a href="https://twitter.com/share?hashtags={{$Settings->sitename}},{{$cat->title}}&text={{$blog->title}}&via={{$Settings->twitter}}" class="icon icon-twitter-logo twitter"></a>
                                        </li>
                                        <li>
                                            <a target="new" href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/latest-news/{{$blog->slung}}" class="icon icon-facebook-logo facebook"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-text">
                            <p>{{$blog->meta}}</p>
                        </div>
                        <a href="{{url('/')}}/latest-news/{{$blog->slung}}" class="btn">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /Blog grid -->
            {{-- <ul class="pagination pull-right">
                <li><a href="#"><i class="icon icon-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="icon icon-angle-right"></i></a></li>
            </ul> --}}
        </div>
    </main>
    <!-- /Page Content -->

@endforeach

@endsection