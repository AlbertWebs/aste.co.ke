@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
@foreach ($About as $about)
		
			<!-- Page Content -->
			<main class="page-main">
				<div class="block">
					<div class="container">
						<ul class="breadcrumbs">
							<li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>
							<li>/<span>About Us</span></li>
						</ul>
					</div>
				</div>

                <div class="block fullboxed parallax" data-parallax="scroll" data-image-src="{{asset('theme/images/block-bg-1.jpg')}}">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt class="img-responsive" />
							</div>
							<div class="col-sm-6">
								<div class="text-wrapper text-lg">
									{!! html_entity_decode($about->content, ENT_QUOTES, 'UTF-8') !!}
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="block fullwidth">
					
					<div id="googleMap" class="google-map">
                        <iframe src="{{$Settings->map}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
				</div>
			</main>
			<!-- /Page Content -->
            @endforeach
@endforeach
@endsection