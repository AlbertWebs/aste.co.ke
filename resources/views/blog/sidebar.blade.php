<div class="col-md-4">
    <div class="sideblock half">
        <h2>Meta</h2>
        <ul class="simple-list">
            <?php $Category = DB::table('categories')->inRandomOrder()->limit('4')->get(); ?>
            @foreach ($Category as $category)
            <li><a href="{{url('/')}}/latest-news/category/{{$category->slung}}"><span class="value"><span>{{$category->title}}</span></span></a></li>  
            @endforeach
        </ul>
    </div>
    <div class="sideblock half">
        <h2>Archives</h2>
        <ul class="simple-list">
            <?php $Archives = DB::table('blogs')->orderBy('id','ASC')->get(); ?>
            @foreach($Archives as $archives)
       
                    
            <li><a href="#">{{$archives->title}}</a></li>
            @endforeach
        </ul>
    </div>
    
    <div class="sideblock">
        <h2>Instagramm</h2>
        <div class="instagramm-feed">
            {{-- limit to 18 --}}
            <a href="#"><img src="{{asset('theme/images/blog/instagram-01.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-02.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-03.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-04.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-05.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-06.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-07.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-08.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-09.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-10.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-11.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-12.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-04.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-05.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-06.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-07.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-08.jpg')}}" alt="" /></a>
            <a href="#"><img src="{{asset('theme/images/blog/instagram-09.jpg')}}" alt="" /></a>
        </div>
    </div>

</div>