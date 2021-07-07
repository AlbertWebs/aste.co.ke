<div class="mobilemenu dblclick">
    <div class="mobilemenu-header">
        <div class="title">MENU</div>
        <a href="#" class="mobilemenu-toggle"></a>
    </div>
    <div class="mobilemenu-content">
        <ul class="nav">
       
            <?php $Categories = DB::table('categories')->limit(10)->get(); ?>
            @foreach ($Categories as $item)
            <li class="">
                <a href="{{url('/')}}/products/{{$item->slung}}">{{$item->title}}</a>
            </li>
           
            @endforeach
        </ul>
    </div>
</div>