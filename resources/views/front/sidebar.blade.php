<div class="col-md-3 filter-col fixed aside">
    <div class="filter-container">
        <div class="fstart"></div>
        <div class="fixed-wrapper">
            <div class="fixed-scroll">
                <div class="filter-col-header">
                    <div class="title">Filters</div>
                    <a href="#" class="filter-col-toggle"></a>
                </div>
                <div class="filter-col-content">
                    <?php $CategoryList = DB::table('categories')->get(); ?>
                    @foreach ($CategoryList as $item)
                    <div class="sidebar-block collapsed">
                        <div class="block-title">
                            <span>{{$item->title}}</span>
                            <div class="toggle-arrow"></div>
                        </div>
                        <?php $ProductList = DB::table('products')->where('category',$item->id)->get(); ?>
                        <div class="block-content">
                            <ul class="category-list">
                                @foreach ($ProductList as $item)
                                <li class="active"><a href="#" class="value"><small>{{$item->name}}</small></a>
                                    <a href="#" class="clear"></a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="bg-striped"></div>
                        </div>
                    </div>
                    @endforeach
                    <div class="sidebar-block collapsed">
                        <div class="block-title">
                            <span>CHOOSE COLOR</span>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="block-content">
                            <ul class="color-list">
                                <li class="active"><a href="#" data-tooltip="Very long some color name" title="Very long some color name"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-red.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Pink" title="Pink"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-pink.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Violet" title="Violet"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-violet.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Blue" title="Blue"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-blue.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Marine" title="Marine"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-marine.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Orange" title="Orange"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-orange.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Yellow" title="Yellow"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-yellow.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Dark Yellow" title="Dark Yellow"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-darkyellow.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="Very long some color name" title="Very long some color name"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-black.png')}}" alt=""></span></a></li>
                                <li><a href="#" data-tooltip="White" title="White"><span class="clear"></span><span class="value"><img src="{{asset('theme/images/colorswatch/color-white.png')}}" alt=""></span></a></li>
                            </ul>
                            <div class="bg-striped"></div>
                        </div>
                    </div>
                    <div class="sidebar-block collapsed">
                        <div class="block-title">
                            <span>Brands</span>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="block-content">
                            <ul class="category-list">
                                <li><a href="#" class="value">Dresses</a>
                                    <a href="#" class="clear"></a>
                                </li>
                                <li><a href="#">Jackets</a>
                                    <a href="#" class="clear"></a>
                                </li>
                                <li class="active"><a href="#">Trousers</a>
                                    <a href="#" class="clear"></a>
                                </li>
                                <li><a href="#">Jeans</a>
                                    <a href="#" class="clear"></a>
                                </li>
                            </ul>
                            <div class="bg-striped"></div>
                        </div>
                    </div>
                    <div class="sidebar-block collapsed">
                        <div class="block-title">
                            <span>Price</span>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="block-content">
                            <ul class="category-list">
                                <li><a href="#">$10-$30</a>
                                    <a href="#" class="clear"></a>
                                </li>
                                <li class="active"><a href="#">$30-$60</a>
                                    <a href="#" class="clear"></a>
                                </li>
                                <li><a href="#">$60-$120</a>
                                    <a href="#" class="clear"></a>
                                </li>
                            </ul>
                            <div class="price-slider-wrapper">
                                <div class="price-values">
                                    <div class="pull-left">$<span id="priceMin"></span></div>
                                    <div class="pull-right">$<span id="priceMax"></span></div>
                                </div>
                                <div id="priceSlider" class="price-slider"></div>
                            </div>
                            <div class="bg-striped"></div>
                        </div>
                    </div>
                    <div class="sidebar-block collapsed">
                        <div class="block-title">
                            <span>Size</span>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="block-content">
                            <ul class="size-list">
                                <li class="active"><a href="#"><span class="clear"></span><span class="value">38</span></a></li>
                                <li><a href="#"><span class="clear"></span><span class="value">38</span></a></li>
                                <li><a href="#"><span class="clear"></span><span class="value">40</span></a></li>
                                <li><a href="#"><span class="clear"></span><span class="value">42</span></a></li>
                            </ul>
                            <div class="bg-striped"></div>
                        </div>
                    </div>
                    <div class="sidebar-block collapsed block-loading">
                        <div class="block-title">
                            <span>Tags</span>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="block-content">
                            <ul class="tags">
                                <li class="active"><a href="#"><span class="clear"></span><span class="value"><span>Dresses</span></span></a></li>
                                <li><a href="#"><span class="clear"></span><span class="value"><span>Outerwear</span></span></a></li>
                                <li><a href="#"><span class="clear"></span><span class="value"><span>Tops</span></span></a></li>
                                <li><a href="#"><span class="clear"></span><span class="value"><span>Sleeveless tops</span></span></a></li>
                                <li><a href="#"><span class="clear"></span><span class="value"><span>Sweaters</span></span></a></li>
                            </ul>
                            <div class="bg-striped"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fend"></div>
    </div>
</div>