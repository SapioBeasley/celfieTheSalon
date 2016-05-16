@extends('layouts.default')

@section('content')
<div class="intro-box full-page-intro" data-parallax-bg="{{asset('img/intro-box-home.jpg')}}">
	<div class="box-img-wrapper">
		<div class="box-img">
			<span></span>
		</div>
	</div>

	<div class="full-page-intro-content align-center">
		<div class="inner-content">
			<p>Celfishly in Love with Beauty.</p>
			<a href="{{route('menu.index')}}" class="btn template-btn-1">Discover more</a>
		</div>
	</div>

	<!-- Scroll Down Btn -->
	<a href="#" class="scroll-btn">
		<span class="icon"></span>
	</a>

	<!-- Rounded Border Bottom -->
	<div class="rounded-border-bottom">
		<span></span>
	</div>
</div>

<section class="section section-description no-margin white-bg">
	<div class="section-title container align-center">
		<h2>What we do<span>short information</span></h2>
	</div>

	<!-- <div class="container">
		<p class="align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. <b>Praesent libero.</b> Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
	</div> -->
</section>

<div class="style-box">
					<div class="row row-fit">
						<div class="col-md-12 image-wrapper">
							<img src="img/style-image-1.jpg" alt="style image cover">
						</div>

						<div class="col-md-12 text-box-wrapper">
							<div class="text-box align-center">
								<h4 class="box-title">Beautifull style</h4>
								<p class="box-subtitle">well designed</p>

								<p class="description">International development, combat malaria partnership inspire social change dedicated globalization time of extraordinary change. Medecins du Monde disruptor reproductive rights.</p>

								<a href="#" class="btn template-btn-1">Discover more</a>
							</div>
						</div>
					</div>
				</div>



<section class="section section-portfolio">
	<div class="section-title container align-center">
		<h2>Portfolio<span>discover our projects</span></h2>
	</div>

	<!-- Portfolio Items -->
	<div class="row row-fit">
		<div class="col-sm-12 col-md-6">
			<div class="portfolio-item">
				<div class="hover-effect">
					<div class="effect-inner">
						<a href="portfolio-item.html">
							<i class="icon"></i>
							<span class="project-link">View project</span>
						</a>
					</div>
				</div>
				<img src="img/portfolio-1.jpg" alt="portfolio item cover" />
			</div>
		</div>

		<div class="col-sm-12 col-md-6">
			<div class="portfolio-item">
				<div class="hover-effect">
					<div class="effect-inner">
						<a href="portfolio-item.html">
							<i class="icon"></i>
							<span class="project-link">View project</span>
						</a>
					</div>
				</div>
				<img src="img/portfolio-2.jpg" alt="portfolio item cover" />
			</div>
		</div>

		<div class="col-sm-12 col-md-6">
			<div class="portfolio-item">
				<div class="hover-effect">
					<div class="effect-inner">
						<a href="portfolio-item.html">
							<i class="icon"></i>
							<span class="project-link">View project</span>
						</a>
					</div>
				</div>
				<img src="img/portfolio-3.jpg" alt="portfolio item cover" />
			</div>
		</div>

		<div class="col-sm-12 col-md-6">
			<div class="portfolio-item">
				<div class="hover-effect">
					<div class="effect-inner">
						<a href="portfolio-item.html">
							<i class="icon"></i>
							<span class="project-link">View project</span>
						</a>
					</div>
				</div>
				<img src="img/portfolio-4.jpg" alt="portfolio item cover" />
			</div>
		</div>
	</div>
</section>

@include('includes.testimonials')

@include('includes.callToAction')
@endsection
