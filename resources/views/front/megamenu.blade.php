<div class="megamenu fadein blackout">							<ul class="nav">
    <li><a href="{{url('/')}}" title=""><i class="icon icon-home"></i></a></li>
    <?php $Categories = DB::table('categories')->limit(6)->get(); ?>
    @foreach ($Categories as $item)
    <li class="">
        <a href="{{url('/')}}/products/{{$item->slung}}">{{$item->title}}</a>
    </li>
   
    @endforeach


    
</ul>
</div>