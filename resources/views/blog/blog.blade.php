@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
@foreach($Blog as $blog)

<!-- Page Content -->
<main class="page-main">
    <div class="container">
        <!-- Page Title -->
        <div class="page-title">
            <div class="title center">
                <h1>{{$blog->title}}</h1>
            </div>
            <div class="text-wrapper">
                <p style="max-width:600px; margin:0 auto;" class="text-center">{{$blog->meta}}</p>
            </div>
        </div>
        <!-- /Page Title -->
        <!-- Two columns -->
        <div class="row">
            <!-- Center column -->
            <div class="col-md-8">
                <div class="blog-post">
                    <div class="blog-photo">
                        <img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="{{$blog->title}}">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title">history so far</h2>
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
                            {!! html_entity_decode($blog->content, ENT_QUOTES, 'UTF-8') !!}
                        </div>
                        <div class="blog-tags">
                            <div class="pull-left">
                                <span>TAGS</span>
                                <ul class="tags">
                                    <?php $Category = DB::table('categories')->get(); ?>
                                    @foreach ($Category as $category)
                                    <li><a href="{{url('/')}}/latest-news/category/{{$category->slung}}"><span class="value"><span>{{$category->title}}</span></span></a></li>  
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="blog-comments">
                            <h3>POST COMMENTS</h3>
                            <?php $Comments = DB::table('comments')->where('status','1')->where('post_id',$blog->id)->get(); ?>
                            <h4><?php echo count($Comments); ?> COMMENTS</h4>
                            @foreach ($Comments as $item)
                            <div class="comment reply">
                                <a href="#post-comment" class="replylink"><i class="icon icon-undo-1"></i></a>
                                <div class="user-photo">
                                    <img class="img-responsive" src="{{asset('theme/images/blog/user-pic.png')}}" alt="User">
                                </div>
                                <div class="comment-details">
                                    <a href="#" class="author">{{$item->name}}</a>
                                    <?php 
                                        $RawDate = $item->created_at;
                                        $FormatDate = strtotime($RawDate);
                                        $Month = date('M',$FormatDate);
                                        $Date = date('D',$FormatDate);
                                        $date = date('d',$FormatDate);
                                        $Year = date('Y',$FormatDate);
                                        $Hour = date('H',$FormatDate);
                                        $Min = date('i',$FormatDate);
                                        $Second = date('s',$FormatDate);
                                    ?>
                                    <div class="date">{{$Month}} {{$date}}, {{$Year}} at {{$Hour}}:{{$Min}}:{{$Second}}</div>
                                    <div class="text">{{$item->content}}</div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                            <h3>POST A COMMENTS</h3>
                            <form id="post-comment" action="#" class="post-comment">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$blog->id}}">
                                <input required type="text" name="name" class="form-control" placeholder="Your full name">
                                <input required type="text" email="email" name="email" class="form-control" placeholder="E-mail">
                                {{-- <input type="text" class="form-control" placeholder="Website"> --}}
                                <textarea required class="form-control" name="content" placeholder="Write your comment here"></textarea>
                                <div>
                                    <button type="submit" class="btn">Submit <img class="loading-gif" width="30" src="{{url('/')}}/uploads/icon/loading.gif" alt=""></button>
                                </div>
                                <br>
                                <div class="alert-success"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Center column -->
            <!-- Right column -->
           @include('blog.sidebar')
            <!-- /Right column -->
        </div>
        <!-- /Two columns -->
    </div>
</main>
<!-- /Page Content -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#post-comment').submit(function(e){
            e.preventDefault();
            $('.loading-gif').show()  
            var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
            $.ajax({
                type: 'POST',
                url: "{{ url('/') }}/latest-news/post-comment",
                data: formdata, // here $(this) refers to the ajax object not form
                success: function (data)
                {
                    $('#post-comment')[0].reset();
                    $('.loading-gif').hide() 
                    $('.alert-success').fadeIn("slow").html(data);
                    // $(dv).fadeOut("slow").html("");
                },
            });
            stay.preventDefault(); 
                })  
            })
</script>

@endforeach
@endforeach

@endsection