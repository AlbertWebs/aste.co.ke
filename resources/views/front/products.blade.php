@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
       		<!-- Sidebar -->
            <div class="sidebar-wrapper">
                <div class="sidebar-top"><a href="#" class="slidepanel-toggle"><i class="icon icon-left-arrow-circular"></i></a></div>
                <ul class="sidebar-nav">				
                    <li> <a href="index.html">HOME</a> </li>
                    <li> <a href="gallery.html">GALLERY</a> </li>
                    <li> <a href="blog.html">BLOG</a> </li>
                    <li> <a href="category-fixed-sidebar.html">SHOP</a> </li>
                    <li> <a href="faq.html">FAQ</a> </li>
                    <li> <a href="contact.html">CONTACT</a> </li>
                </ul>
                <div class="sidebar-bot">
                    <div class="share-button toTop">
                        <span class="toggle"></span>
                        <ul class="social-list">
                            <li><a href="#" class="icon icon-google google"></a></li>
                            <li><a href="#" class="icon icon-fancy fancy"></a></li>
                            <li><a href="#" class="icon icon-pinterest pinterest"></a></li>
                            <li><a href="#" class="icon icon-twitter-logo twitter"></a></li>
                            <li><a href="#" class="icon icon-facebook-logo facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->
                <!-- Page Content -->
                <main class="page-main">
                    <div class="block">
                        <div class="container">
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>
                                <li>/<span>All Products</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <!-- Two columns -->
                        <div class="row row-table">
                            <!-- Left column -->
                            @include('front.sidebar')
                            <!-- /Left column -->
                            <!-- Center column -->
                            <div class="col-md-9 aside">
                                <!-- Page Title -->
                                <div class="page-title">
                                    <div class="title center">
                                        <h1>All Products</h1>
                                    </div>
                                </div>
                                <!-- /Page Title -->
                                
                                <!-- Categories -->
                                <div class="categories">
                                    <div class="row">
                                        @foreach($Categories as $Categories)
                                        <div class="col-xs-6 col-sm-3">
                                            <a href="{{url('/')}}/products/{{$Categories->slung}}" class="category-block">
                                                <div class="category-image">
                                                    <img src="{{url('/')}}/uploads/categories/{{$Categories->image}}" alt="#">
                                                </div>
                                                <div class="category-title">
                                                    {{$Categories->title}}
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- /Categories -->
                                <!-- Filter Row -->
                                <div class="filter-row">
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-7 col-lg-5 col-left">
                                            <div class="filter-button">
                                                <a href="#" class="btn filter-col-toggle"><i class="icon icon-filter"></i><span>FILTER</span></a>
                                            </div>
                                            <div class="form-label">Sort by:</div>
                                            <div class="select-wrapper-sm">
                                                <select class="form-control input-sm">
                                                    <option value="featured">Featured</option>
                                                    <option value="rating">Rating</option>
                                                    <option value="price">Price</option>
                                                </select>
                                            </div>
                                            <div class="directions">
                                                <a href="#"><i class="icon icon-arrow-down"></i></a>
                                                <a href="#"><i class="icon icon-arrow-up"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-lg-2 hidden-xs">
                                            <div class="view-mode">
                                                <a href="#" class="grid-view"><i class="icon icon-th"></i></a>
                                                <a href="#" class="list-view"><i class="icon icon-th-list"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-3 col-lg-5 col-right">
                                            <div class="form-label">Show:</div>
                                            <div class="select-wrapper-sm">
                                                <select class="form-control input-sm">
                                                    <option value="featured">12</option>
                                                    <option value="rating">36</option>
                                                    <option value="price">100</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-striped"></div>
                                </div>
                                <!-- /Filter Row -->
                                <!-- Total -->
                                <div class="items-total">Items 1 to 15 of 28 total</div>
                                <!-- /Total -->
                                <!-- Products Grid -->
                                <div class="products-grid three-in-row product-variant-5">
                                    @foreach ($Products as $product)
                                    @if($product->stock == 'In Stock')
                                    <!-- Product Item -->
                                    <div class="product-item large category1">
                                        <div class="product-item-inside">
                                            <div class="product-item-info">
                                                <!-- Product Photo -->
                                                <div class="product-item-photo">
                                                    <!-- Product Label -->
                                                    <div class="product-item-label label-new"><span>New</span></div>
                                                    <!-- /Product Label -->
                                                    <!-- product main photo -->
                                                    <!-- product inside carousel -->
                                                    <div class="carousel-inside slide" data-ride="carousel">
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active">
                                                                <a href="#"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_one}}" alt="{{$product->name}}"></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_two}}" alt="{{$product->name}}"></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_three}}" alt="{{$product->name}}"></a>
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control next"></a>
                                                        <a class="carousel-control prev"></a>
                                                    </div>
                                                    <!-- /product inside carousel -->
                                                    <a href="{{url('/')}}/quick-view/{{$product->id}}" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a>
                                                    <!-- /product main photo  -->
                                                    <!-- Product Actions -->
                                                    <a href="#" title="Add to Wishlist" class="no_wishlist"> <i class="icon icon-heart"></i><span>Add to Wishlist</span> </a>
                                                    <div class="product-item-actions">
                                                        <div class="share-button toBottom">
                                                            <span class="toggle"></span>
                                                            <ul class="social-list">
                                                                <li>
                                                                    <a href="#" class="icon icon-google google"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-fancy fancy"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-pinterest pinterest"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- /Product Actions -->
                                                </div>
                                                <!-- /Product Photo -->
                                                <!-- Product Details -->
                                                <div class="product-item-details">
                                                    <div class="product-item-name"> <a title="{{$product->name}}" href="{{url('/')}}/product/{{$product->slung}}" class="product-item-link">{{$product->name}}</a> </div>
                                                    <div class="product-item-description">{{$product->meta}}</div>
                                                    <div class="price-box"> <span class="price-container"> <span class="price-wrapper"><span class="price">${{$product->price}}</span> </span>
                                                        </span>
                                                    </div>
                                                    <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
                                                    <button id="option" onclick="addToCart(this)" class="btn add-to-cart" data-product="{{$product->id}}"> <i class="icon icon-cart"></i><span>Add to Cart</span> <img class="loading-gif" width="30" src="{{url('/')}}/uploads/icon/loading.gif" alt=""></button>
                                                </div>
                                                <!-- /Product Details -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product Item --> 
                                    @else 
                                    <div class="product-item large category1">
                                        <div class="product-item-inside">
                                            <div class="product-item-info">
                                                <!-- Product Photo -->
                                                <div class="product-item-photo">
                                                    <!-- Product Label -->
                                                    <div class="product-item-label label-new"><span>New</span></div>
                                                    <!-- /Product Label -->
                                                    <!-- product main photo -->
                                                    <!-- product inside carousel -->
                                                    <div class="carousel-inside slide" data-ride="carousel">
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="item active">
                                                                <a href="#"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_one}}" alt="{{$product->name}}"></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_two}}" alt="{{$product->name}}"></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_three}}" alt="{{$product->name}}"></a>
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control next"></a>
                                                        <a class="carousel-control prev"></a>
                                                    </div>
                                                    <a href="{{url('/')}}/quick-view/{{$product->id}}" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Quick View</span></a>
                                                    <a href="{{url('/')}}/product/{{$product->slung}}" class="product-item-not-available">
                                                        <span class="vert-wrapper"><span class="vert"><span class="text">Not Available</span></span>
                                                        </span>
                                                    </a>
                                                    <!-- /product main photo  -->
                                                    <!-- Product Actions -->
                                                    <a href="#" title="Add to Wishlist" class="no_wishlist"> <i class="icon icon-heart"></i><span>Add to Wishlist</span> </a>
                                                    <div class="product-item-actions">
                                                        <div class="share-button toBottom">
                                                            <span class="toggle"></span>
                                                            <ul class="social-list">
                                                                <li>
                                                                    <a href="#" class="icon icon-google google"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-fancy fancy"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-pinterest pinterest"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- /Product Actions -->
                                                </div>
                                                <!-- /Product Photo -->
                                                <!-- Product Details -->
                                                <div class="product-item-details">
                                                    <div class="product-item-name"> <a title="{{$product->name}}" href="{{url('/')}}/product/{{$product->slung}}" class="product-item-link">{{$product->name}}</a> </div>
                                                    <div class="product-item-description">{{$product->meta}}</div>
                                                    <div class="price-box"> <span class="price-container"> <span class="price-wrapper"><span class="price">${{$product->price}}</span> </span>
                                                        </span>
                                                    </div>
                                                    <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
                                                    <button onclick="addToCart(this)" class="btn add-to-cart" data-product-id="{{$product->id}}" data-product="{{$product->id}}"> <i class="icon icon-cart"></i><span>Add to Cart</span> <img class="loading-gif" width="30" src="{{url('/')}}/uploads/icon/loading.gif" alt=""></button>
                                                </div>
                                                <!-- /Product Details -->
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach    
                                </div>
                                <!-- /Products Grid -->
                                <!-- Filter Row -->
                                <div class="filter-row">
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-7 col-lg-5 col-left">
                                            <div class="filter-button">
                                                <a href="#" class="btn filter-col-toggle"><i class="icon icon-filter"></i><span>FILTER</span></a>
                                            </div>
                                            <div class="form-label">Sort by:</div>
                                            <div class="select-wrapper-sm">
                                                <select class="form-control input-sm">
                                                    <option value="featured">Featured</option>
                                                    <option value="rating">Rating</option>
                                                    <option value="price">Price</option>
                                                </select>
                                            </div>
                                            <div class="directions">
                                                <a href="#"><i class="icon icon-arrow-down"></i></a>
                                                <a href="#"><i class="icon icon-arrow-up"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-lg-2 hidden-xs">
                                            <div class="view-mode">
                                                <a href="#" class="grid-view"><i class="icon icon-th"></i></a>
                                                <a href="#" class="list-view"><i class="icon icon-th-list"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-3 col-lg-5 col-right">
                                            <div class="form-label">Show:</div>
                                            <div class="select-wrapper-sm">
                                                <select class="form-control input-sm">
                                                    <option value="featured">12</option>
                                                    <option value="rating">36</option>
                                                    <option value="price">100</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Filter Row -->
                                <!-- Total -->
                                <div class="items-total">Items 1 to 15 of 28 total</div>
                                <!-- /Total -->
                            </div>
                            <!-- /Center column -->
                        </div>
                        <div class="ymax"></div>
                        <!-- /Two columns -->
                    </div>
                </main>
                <!-- /Page Content -->

@endforeach

@endsection