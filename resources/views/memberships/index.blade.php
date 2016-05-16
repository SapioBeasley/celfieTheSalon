@extends('layouts.default')

@section('title', 'Memberships')

@section('content')
<div class="intro-box" data-parallax-bg="{{asset('img/intro-box-home.jpg')}}">
    <div class="box-img-wrapper">
        <div class="box-img">
            <span></span>
        </div>
    </div>

    <div class="intro-box-inner container">
        @include('includes.pageTitle')
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

<section class="section section-blog no-margin" data-parallax-bg="">
	<div class="box-img-wrapper">
		<div class="box-img">
			<span></span>
		</div>
	</div>

	<div class="section-wrapper">

		<div class="section-title container align-center">
			<h2 style="color: #616373">Memberships<span>be your own kind of beautiful.</span></h2>
		</div>

		<div class="container">
			<p class="align-center">We have a <b>perfectly Celfish</b> program for you. All memberships can be cancelled anytime without penalties or questions asked. All memberships are auto-billed monthly. </p>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-20 col-lg-offset-2">
					<div class="row">
						<div class="col-md-7">
							<div class="blog-post-preview-wrapper">
								<div class="blog-post-preview">
									<div class="post-cover">
										<!-- <ul class="clean-list post-meta">
											<li><a href="#">Tim Brown</a></li>
											<li>18 December</li>
											<li><a href="#">Design</a></li>
										</ul> -->
										<img src="{{asset('img/intro-box-home.jpg')}}" alt="blog preview cover" />
									</div>

									<div class="post-body align-center">
										<h3 class="post-title">
											<a href="single-post.html">Celfish Blowouts</a>
										</h3>

										<p class="post-excerpt">4 blowouts a month for $120/m, saving you $5 on each blowout.</p>

										<a href="single-post.html" class="btn template-btn-1">Get Started</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-10">
							<div class="blog-post-preview-wrapper">
								<div class="blog-post-preview featured">
									<div class="post-cover">
										<!-- <ul class="clean-list post-meta">
											<li><a href="#">Tim Brown</a></li>
											<li>24 December</li>
											<li><a href="#">Design</a></li>
										</ul> -->

										<div class="post-body align-center">
											<h3 class="post-title">
												<a href="single-post.html">Tanning</a>
											</h3>

											<p class="post-excerpt">Unlimited Tanning- $89/m</p>

											<a href="single-post.html" class="btn template-btn-1">Get Started</a>
										</div>

										<img src="{{asset('img/intro-box-home.jpg')}}" alt="blog preview cover" />
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-7">
							<div class="blog-post-preview-wrapper">
								<div class="blog-post-preview">
									<div class="post-cover">
										<!-- <ul class="clean-list post-meta">
											<li><a href="#">Tim Brown</a></li>
											<li>29 December</li>
											<li><a href="#">Design</a></li>
										</ul> -->
										<img src="{{asset('img/intro-box-home.jpg')}}" alt="blog preview cover" />
									</div>

									<div class="post-body align-center">
										<h3 class="post-title">
											<a href="single-post.html">Make-up and a blowout</a>
										</h3>

										<p class="post-excerpt">$70 for $15 savings each time/ Twice a month for $150.00.</p>

										<a href="single-post.html" class="btn template-btn-1">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('includes.testimonials')
@endsection
