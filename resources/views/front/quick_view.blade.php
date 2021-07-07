@foreach ($SiteSettings as $Settings)
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Vendor -->
	<link href="{{asset('theme/js/vendor/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/slick/slick.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/magnificpopup/dist/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('theme/js/vendor/darktooltip/dist/darktooltip.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">

	<!-- Custom -->
	<link href="{{asset('theme/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">

	<!-- Icon Font -->
	<link href="{{asset('theme/fonts/icomoon-reg/style.css')}}" rel="stylesheet">

	<!-- Google Font -->
	<link href="{{asset('theme/fonts.googleapis.com/cssd6fb.css?family=Oswald:300,400,700|Raleway:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i')}}" rel="stylesheet">

</head>

<body class="quickview">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5">
				<!-- Product Gallery -->
				<div class="main-image">
					<img src="{{url('/')}}/uploads/products/{{$Product->image_one}}" class="zoom" alt="" data-zoom-image="{{url('/')}}/uploads/products/{{$Product->image_one}}" />
					<div class="dblclick-text"><span>Double click for enlarge</span></div>
				</div>
				<div class="product-previews-wrapper">
					<div class="product-previews-carousel" id="previewsGallery">
						<a href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_one}}"><img src="{{url('/')}}/uploads/products/{{$Product->image_one}}" alt="" /></a>
						<a href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_two}}"><img src="{{url('/')}}/uploads/products/{{$Product->image_two}}" alt="" /></a>
						<a href="#" data-image="{{url('/')}}/uploads/products/{{$Product->image_three}}"><img src="{{url('/')}}/uploads/products/{{$Product->image_three}}" alt="" /></a>
					</div>
				</div>
				<!-- /Product Gallery -->
			</div>
			<div class="col-sm-7">
				<div class="product-info-block classic">
					<div class="product-info-top">
						<div class="product-sku">SKU: <span>{{$Product->sku}}</span></div>
						<div class="rating">
							<i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star"></i><span class="count">18 reviews</span>
						</div>
					</div>
					<div class="product-name-wrapper">
						<h1 class="product-name">{{$Product->name}}</h1>
						<div class="product-labels">
							<span class="product-label sale">SALE</span>
							<span class="product-label new">NEW</span>
						</div>
					</div>
					<div class="product-availability">Availability: <span>{{$Product->stock}}</span></div>
					<div class="product-description">
						<p>{{$Product->meta}}</p>
					</div>
					<?php $CheckVariations = DB::table('variations')->where('product_id',$Product->id)->get(); ?>
					@if($CheckVariations->isEmpty())
					<div class="product-description">
						<p>{!! html_entity_decode($Product->content, ENT_QUOTES, 'UTF-8') !!}</p>
					</div>
					@else
					<div class="product-options">
						<div class="product-size swatches">
							<span class="option-label">Size:</span>
							<div class="select-wrapper-sm">
								<select class="form-control input-sm size-variants">
									<?php $Size = DB::table('variations')->where('type','size')->where('product_id',$Product->id)->get(); ?>
									@foreach ($Size as $size)
									<option value="{{$size->value}}">{{$size->value}} - ${{$size->price}}.00 USD</option>
									@endforeach
								</select>
							</div>
							<ul class="size-list">
								
								@foreach ($Size as $size)
									@if($size->status == '1')
									<li><a href="{{url('/')}}/product-variation/{{$size->id}}" data-value='{{$size->value}}'><span class="value">{{$size->value}}</span></a></li>
									@else 
									<li class="absent-option"><a href="{{url('/')}}/product-variation/{{$size->id}}" data-value='{{$size->value}}'><span class="value">{{$size->value}}</span></a></li>
									@endif
								@endforeach
							</ul>
						</div>
						<div class="product-color swatches">
							<span class="option-label">Color:</span>
							<div class="select-wrapper-sm">
								<select class="form-control input-sm">
									<?php $Color = DB::table('variations')->where('type','color')->where('product_id',$Product->id)->get(); ?>
									@foreach ($Color as $item)
									<option value="{{$item->value}}">{{$item->value}}</option>
									@endforeach
								</select>
							</div>
							<ul class="color-list">
								@foreach ($Color as $item)
								@if($item->status == '1')
								<li><a href="#" data-toggle="tooltip" data-placement="top" title="{{$item->value}}" data-value="{{$item->value}}" data-image="{{url('/')}}/uploads/variations/{{$item->image}}"><span class="value"><img src="{{url('/')}}/uploads/variations/{{$item->image}}" alt=""></span></a></li>
								@else 
								<li class="absent-option"><a href="#" data-toggle="tooltip" data-placement="top" title="{{$item->value}}" data-value="{{$item->value}}" data-image="{{url('/')}}/uploads/variations/{{$item->image}}"><span class="value"><img src="{{url('/')}}/uploads/variations/{{$item->image}}" alt=""></span></a></li>
								@endif
								@endforeach
							</ul>
						</div>
						{{-- <div class="product-qty">
							<span class="option-label">Qty:</span>
							<div class="qty qty-changer">
								<fieldset>
									<input type="button" value="&#8210;" class="decrease">
									<input type="text" class="qty-input" value="1" data-min="0">
									<input type="button" value="+" class="increase">
								</fieldset>
							</div>
						</div> --}}
					</div>
					@endif
					<div class="product-actions">
						<div class="row">
							<div class="col-md-6">
								{{-- <div class="product-meta">
									<span><a href="#"><i class="icon icon-heart"></i> Add to wishlist</a></span>
									<span><a href="#"><i class="icon icon-balance"></i> Add to Compare</a></span>
								</div> --}}
								<div class="social">
									<div class="share-button toLeft">
										<span class="toggle">Share</span>
										<ul class="social-list">
											<?php $Cat = DB::table('categories')->where('id',$Product->category)->get(); ?>
											@foreach ($Cat as $cat) 

											@endforeach
											<li>
												<a target="new" href="https://twitter.com/share?hashtags={{$Settings->sitename}},{{$cat->title}}&text={{$Product->name}}&via={{$Settings->twitter}}" class="icon icon-twitter-logo twitter"></a>
											</li>
											<li>
												<a target="new" href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/product/{{$Product->slung}}" class="icon icon-facebook-logo facebook"></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="price">
									{{-- <span class="old-price"><span>$140.00</span></span> --}}
									<span class="special-price"><span>${{$Product->price}}.00</span></span>
								</div>
								<div class="actions">
									<button 
									  onclick="addToCartNow(this)" 
									  data-product="{{$Product->id}}"
									  data-loading-text='<i class="icon icon-spinner spin"></i><span>Add to cart</span>'
									  class="btn btn-lg btn-loading add-to-cart">
									  <i class="icon icon-cart"></i>
									  <span>Add to cart</span>
									</button>
									<a target="new" href="{{url('/')}}/product/{{$Product->slung}}" class="btn btn-lg product-details"><i class="icon icon-external-link"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="{{asset('theme/js/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('theme/js/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/js/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('theme/js/vendor/magnificpopup/dist/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('theme/js/vendor/countdown/jquery.countdown.min.js')}}"></script>
<script src="{{asset('theme/js/vendor/ez-plus/jquery.ez-plus.js')}}"></script>
<script src="{{asset('theme/js/vendor/tocca/tocca.min.js')}}"></script>
<script src="{{asset('theme/js/vendor/darktooltip/dist/jquery.darktooltip.js')}}"></script>
<script src="{{asset('theme/js/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('theme/js/megamenu.html')}}"></script>
<script src="{{asset('theme/js/app.js')}}"></script>
</body>
@include('front.hide')
	@include('front.cart');

</html>
@endforeach
