@extends('layouts.default')

@section('title', 'Menu')

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

<div class="tabed-content checkout-tabs">
	<div class="tabs-header">
		<ul class="clean-list">
			<li data-tab-link="nr-1" class="tab-link current">Lashes</li>
			<li data-tab-link="nr-2" class="tab-link">Extentions</li>
			<li data-tab-link="nr-3" class="tab-link">Blowouts</li>
			<li data-tab-link="nr-4" class="tab-link">Tanning</li>
		</ul>
	</div>

	<div class="tabs-body">

		<div id="nr-1" class="tab-item current">
			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Bombshell, <span>up to 2.5 hours</span></h4>
										<p class="description">Ultra glam up to 90% full, this is fullest.</p>
										<p class="description">Master Artist $225</p>
										<p class="description">Apprentice $150</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/brush.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Lover, <span>up to 2 hours</span></h4>
										<p class="description">Luscious lashes up to 70% full.</p>
										<p class="description">Master Artist $175</p>
										<p class="description">Apprentice $125</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/gloss.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Cutie, <span>up to 1.5 hours</span></h4>
										<p class="description">Up to 50% full, naturally enhanced.</p>
										<p class="description">Master Artist $---</p>
										<p class="description">Apprentice $---</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section demo-blocks-section no-margin">
				<div class="demo-blocks">
					<p class="demo-blocks-footer align-center">2-3 weeks after initial lash service</p>
				</div>
			</section>

			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/hair-dryer.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Bombshell Fill</h4>
										<p class="description">Master Artist $95</p>
										<p class="description">Apprentice $75</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/hair-spray.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Lover Fill</h4>
										<p class="description">Master Artist $99</p>
										<p class="description">Apprentice $75</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/hair-straightener.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Cutie</h4>
										<p class="description">Master Artist $59</p>
										<p class="description">Apprentice $49</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div id="nr-2" class="tab-item">
			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/mascara.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Fusion (uTip)</h4>
										<p class="description">$500 +</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/nail-polish.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Tape</h4>
										<p class="description">$350 +</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/perfume-1.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Sewn-in Weft</h4>
										<p class="description">$80/track</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			{{-- <section class="section demo-blocks-section no-margin">
				<div class="demo-blocks">
					<p class="demo-blocks-footer align-center">More layouts on the way</p>
				</div>
			</section> --}}

			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/hand-mirror.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">
										<h4 class="heading">Clip-in's</h4>
										<p class="description">$200</p>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/lotion.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">I-Tips (microbeads)</h4>
										<p class="description">$500 +</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/makeup-1.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Removal</h4>
										<p class="description">$100</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div id="nr-3" class="tab-item">
			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Bombshell, <span>up to 2.5 hours</span></h4>
										<p class="description">Ultra glam up to 90% full, this is fullest.</p>
										<p class="description">Master Artist $225</p>
										<p class="description">Apprentice $150</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Lover, <span>up to 2 hours</span></h4>
										<p class="description">Luscious lashes up to 70% full.</p>
										<p class="description">Master Artist $175</p>
										<p class="description">Apprentice $125</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Cutie, <span>up to 1.5 hours</span></h4>
										<p class="description">Up to 50% full, naturally enhanced.</p>
										<p class="description">Master Artist $---</p>
										<p class="description">Apprentice $---</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section demo-blocks-section no-margin">
				<div class="demo-blocks">
					<p class="demo-blocks-footer align-center">More layouts on the way</p>
				</div>
			</section>

			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Bombshell Fill</h4>
										<p class="description">Master Artist $95</p>
										<p class="description">Apprentice $75</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Lover Fill</h4>
										<p class="description">Master Artist $99</p>
										<p class="description">Apprentice $75</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Cutie</h4>
										<p class="description">Master Artist $59</p>
										<p class="description">Apprentice $49</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div id="nr-4" class="tab-item">
			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Bombshell, <span>up to 2.5 hours</span></h4>
										<p class="description">Ultra glam up to 90% full, this is fullest.</p>
										<p class="description">Master Artist $225</p>
										<p class="description">Apprentice $150</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Lover, <span>up to 2 hours</span></h4>
										<p class="description">Luscious lashes up to 70% full.</p>
										<p class="description">Master Artist $175</p>
										<p class="description">Apprentice $125</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Cutie, <span>up to 1.5 hours</span></h4>
										<p class="description">Up to 50% full, naturally enhanced.</p>
										<p class="description">Master Artist $---</p>
										<p class="description">Apprentice $---</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section demo-blocks-section no-margin">
				<div class="demo-blocks">
					<p class="demo-blocks-footer align-center">More layouts on the way</p>
				</div>
			</section>

			<section class="section section-showcase">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-20 col-lg-offset-2">
							<div class="row">
								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Bombshell Fill</h4>
										<p class="description">Master Artist $95</p>
										<p class="description">Apprentice $75</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Lover Fill</h4>
										<p class="description">Master Artist $99</p>
										<p class="description">Apprentice $75</p>
										<span class="box-footer">x</span>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="small-showcase-box">
										<img src="{{asset('img/desk.svg')}}" style="width: 70px;margin-bottom: 20px;"/>
										<h4 class="heading">Celfish Cutie</h4>
										<p class="description">Master Artist $59</p>
										<p class="description">Apprentice $49</p>
										<span class="box-footer">x</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

	</div>
</div>

@include('includes.callToAction')
@endsection
