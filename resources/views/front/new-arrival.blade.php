<div class="container pt-6 new-arrivals">
    <div class="heading heading-center mb-3">
        <h2 class="title">New Arrivals</h2><!-- End .title -->

        <ul class="nav nav-pills justify-content-center" role="tablist">
            {{-- <li class="nav-item">
                <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
            </li> --}}
            <?php $AllCat = DB::table('categories')->get(); ?>
            @foreach ($AllCat as $all)
            <li class="nav-item">
                <a class="nav-link" id="new-cloth-links-{{$all->slung}}" data-toggle="tab" href="#new-cloth-link-{{$all->slung}}" role="tab" aria-controls="new-cloth-link-{{$all->slung}}" aria-selected="false">{{$all->title}}</a>
            </li>
            @endforeach
           
        </ul>
    </div><!-- End .heading -->

    <div class="tab-content">
        <?php $Count = 1 ?>
        @foreach ($AllCat as $all)
            <div class="tab-pane p-0 fade @if($Count == 1) show active @else @endif"  id="new-cloth-link-{{$all->slung}}" role="tabpanel" aria-labelledby="new-cloth-links-{{$all->slung}}">
                <div class="products">
                    <div class="row justify-content-center">
                        <?php $Lastest = DB::table('products')->where('category',$all->id)->orderBy('id','DESC')->paginate(8); ?>
                        @foreach ($Lastest as $latest)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                 

                                    <a href="{{url('/')}}/product/{{$latest->slung}}">
                                        <img src="{{url('/')}}/uploads/products/{{$latest->image_one}}" alt="Product image" class="product-image">
                                        @if($latest->image_two == null or $latest->image_two == 0)
        
                                        @else
                                        <img src="{{url('/')}}/uploads/products/{{$latest->image_two}}" alt="Product image" class="product-image-hover">
                                        @endif
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="{{url('/')}}/shopping-cart/add-to-wishlist/{{$latest->id}}" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-transparent">
                                        <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$latest->id}}" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <?php $Category = DB::table('categories')->where('id',$latest->category)->get(); ?>
                                    @foreach ($Category as $item)
                                    <div class="product-cat">
                                        <a href="#">{{$item->title}}</a>
                                    </div><!-- End .product-cat -->
                                    @endforeach
                                    <h3 class="product-title "><a href="{{url('/')}}/product/{{$latest->slung}}">{{$latest->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price ">
                                        {{--  --}}
                                        @if (session()->has('rates'))
                                            <?php
                                                $rates = Session::get('rates');
                                                $Rates = DB::table('rates')->where('rates',$rates)->get();
                                            ?>
                                            @foreach ($Rates as $rt)
                                                @if($latest->price == $latest->price_raw)
                                                <span>{{$rt->symbol}} <?php $total = $latest->price*$rt->rates; echo ceil($total) ?></span>
                                                @else
                                                    <span class="new-price">Now {{$rt->symbol}} <?php $total = $latest->price*$rt->rates; echo ceil($total) ?></span>
                                                    <span class="old-price">Was {{$rt->symbol}} <?php $total = $latest->price_raw*$rt->rates; echo ceil($total) ?></span>
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="price-box">
                                                @if($latest->price == $latest->price_raw)
                                                    <span class="new-price">Now  <?php $total = $latest->price; echo ceil($total) ?></span>
                                                    
                                                @else
                                                    <span class="new-price">Now  <?php $total = $latest->price; echo ceil($total) ?></span>
                                                    <span class="old-price">Was  <?php $total = $latest->price_raw; echo ceil($total) ?></span>
                                                @endif
                                            </div><!-- End .price-box -->
                                        @endif
                                    {{--  --}}
                                    </div><!-- End .product-price -->
                                   
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        @endforeach
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- .End .tab-pane -->
            <?php $Count = $Count+1 ?>
        @endforeach
    </div><!-- End .tab-content -->

    

    
</div><!-- End .container -->