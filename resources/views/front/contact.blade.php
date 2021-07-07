@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)
		
			<!-- Page Content -->
			<main class="page-main">
				<div class="block">
					<div class="container">
						<ul class="breadcrumbs">
							<li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>
							<li>/<span>Contact</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row">
							<div class="col-sm-5">
								<div class="text-wrapper">
									<h2>{{$Settings->sitename}}</h2>
									<div class="address-block">
										<h3>Our Addrsss</h3>
										<ul class="simple-list">
											<li><i class="icon icon-location-pin"></i>Adress: {{$Settings->address}}</li>
											<li><i class="icon icon-phone"></i>Phone: {{$Settings->mobile_one}}</li>
											<li><i class="icon icon-phone"></i>Phone: {{$Settings->mobile_one}}</li>
											<li><i class="icon icon-close-envelope"></i>Email: <a href="mailto:{{$Settings->email_one}}">{{$Settings->email_one}}</a></li>
										</ul>
									</div>
									<div class="address-block last">
										<h3>About Us</h3>
										<p>{{$Settings->welcome}}</p>
									</div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="text-wrapper">
									<h2>Contact Information</h2>
									<p class="alert-success" id="contactFormSuccess">Your email was send successfully!</p>
									<p id="contactFormError">Error, try to submit this form again.</p>
									<form id="contactform" class="contact-form white" name="contactform" method="post">
									    @csrf
										@honeypot
										<label>Name<span class="required">*</span></label>
										<input type="text" class="form-control input-lg" name="name" autocomplete="off" required>
										<label>E-mail<span class="required">*</span></label>
										<input type="text" class="form-control input-lg" name="email" autocomplete="off" required>
										<label>Subject<span class="required">*</span></label>
										<input type="text" class="form-control input-lg" name="subject" autocomplete="off" required>
										<label>Comment<span class="required">*</span></label>
										<textarea class="form-control input-lg" name="message"></textarea>
										{{-- spam protect --}}
										<div>
											<button class="btn btn-lg" id="submit">Submit <img class="loading-gif" width="30" src="{{url('/')}}/uploads/icon/loading.gif" alt=""></button>
										</div>
										<div class="required-text">* Required Fields</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block fullwidth">
					<div id="googleMap" class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1620569164602!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
				</div>
			</main>
			<!-- /Page Content -->
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
			<script>
				$("#contactform").submit(function(stay){
					stay.preventDefault(); 
					$('.loading-gif').show() 
					var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
						$.ajax({
							type: 'POST',
							url: "{{ url('/') }}/send-contact",
							data: formdata, // here $(this) refers to the ajax object not form
							success: function (data) {
							if(data = 'Success'){
								$('#contactFormSuccess').show();
								$('#contactform')[0].reset();
							}else{
								$('#contactFormError').show();
							}
							$('.loading-gif').hide() 
							},
						});
						stay.preventDefault(); 
					});

			</script>
@endforeach
@endsection