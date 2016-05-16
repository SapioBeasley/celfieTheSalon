@extends('layouts.default')

@section('title', 'Contact')

@section('content')
<div class="intro-box inverted" data-parallax-bg="{{asset('img/intro-box-home.jpg')}}">
	<div class="box-img-wrapper">
		<div class="box-img">
			<span></span>
		</div>
	</div>

	<div class="intro-box-inner container">
		@include('includes.pageTitle')
	</div>

	<a href="#" class="scroll-btn">
		<span class="icon"></span>
	</a>

	<div class="rounded-border-bottom">
		<span></span>
	</div>
</div>

<section class="section section-contact no-margin">
	<div class="contact-box-wrapper">
		<div class="row">
			<div class="col-lg-20 col-lg-offset-2">
				<div class="row">
					<div class="col-md-14">
						<form class="contact-form">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-line">
										<input type="text" class="form-input check-value" name="name" />
										<span class="label" data-name="Name"></span>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="input-line">
										<input type="text" class="form-input check-value" name="e-mail" />
										<span class="label" data-name="Email address"></span>
									</div>
								</div>
							</div>

							<div class="input-line">
								<textarea class="form-input check-value" name="message"></textarea>
								<span class="label" data-name="Message"></span>
							</div>

							<button class="btn template-btn-1 form-send">Contact</button>
						</form>
					</div>

					<div class="col-md-8 col-md-offset-1 col-lg-offset-2">
						<div class="contact-block-widget">
							<div class="contact-block">
								<h5 class="block-title">Address</h5>
								<p>4210 W Craig Rd Ste 109<br />Las Vegas, NV 89032</p>
							</div>

							<div class="contact-block">
								<h5 class="block-title">Contact information</h5>

								<p><a href="mailto:info&#64;celfiethesalon.com">info&#64;celfiethesalon.com</a><br />702.405.0905</p>
							</div>

							<div class="contact-block">
								<h5 class="block-title">We are social</h5>

								<ul class="clean-list social-items">
									<li>
										<a href="#" target="_blank">
											<i class="icon-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-pinterest"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-google-plus"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="map-wrapper">
		<div id="map-canvas" class="contact-map" data-options='{
			"marker": "img/map-marker.png",
			"marker_coord": {
				"lat": {{$addressGeometry['lat']}},
				"lon": {{$addressGeometry['lng']}}
			},
			"map_center": {
				"lat": {{$addressGeometry['lat']}},
				"lon": {{$addressGeometry['lng']}}
			},
			"zoom": "15"
		}'></div>
	</div>
</section>
@endsection
