{{-- Extends layout --}}
@extends('layout.website_default')

{{-- Content --}}
@section('content')

<div role="main" class="main">
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/website/media/img/about_us.jpg);">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">About Us</h1>
					<span class="sub-title">The perfect choice to get your choral singing</span>
				</div>
				<div class="col-md-12 align-self-center order-1">
					<ul class="breadcrumb breadcrumb-light d-block text-center">
						<li><a href="/">Home</a></li>
						<li class="active">Pages</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0" style="position: relative; bottom: 35px">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
					<h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
					<p class="lead">Carrot cake sweet. Toffee chocolate cake macaroon lemon drops sugar plum gummies dessert bear .</p>
					<p class="pr-5 mr-5">Muffin chupa chups jelly-o chocolate cake powder croissant. Gummies croissant marzipan marzipan pudding fruitcake wafer brownie fruitcake. Apple pie jelly fruitcake lollipop. Apple pie cotton candy cupcake gingerbread marzipan toffee lemon drops. Sweet roll fruitcake pie carrot cake danish pudding lemon drops pastry gummi bears.</p>
				</div>
				<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
					<img src="{{ asset('website/media/img/home/two.png') }}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
					<img src="{{ asset('website/media/img/home/bg_2.jpg') }}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
					<img src="{{ asset('website/media/img/home/one.jpg') }}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
				</div>
			</div>
		</div>
	</section>

	<section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}" style="position: relative; bottom: 65px">
		<div class="container">
			<div class="row counters counters-sm pb-4 pt-3">
				<div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-user text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="43" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">Happy members</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-badge text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="12">0</strong>
						<label class="text-4 mt-1 text-color-light">Years In Singing</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
					<div class="counter">
						<i class="icons icon-graph text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="32">0</strong>
						<label class="text-4 mt-1 text-color-light">Happy events</label>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0" style="position: relative; bottom: 65px">
		<div class="container pb-2">
			<div class="row">
				<div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
					<h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our members</strong></h2>
					<p class="lead">Cake sweet. Toffee chocolate cake macaroon lemon drops sugar plum gummies dessert bear.</p>
				</div>
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
						<div>
							<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
								<div class="testimonial-author">
									<img src="{{ asset('website/media/img/clients/female.png') }}" class="img-fluid rounded-circle mb-0" alt="">
								</div>
								<blockquote>
									<p class="text-color-dark text-4 line-height-5 mb-0">I have been let down before and was really nervous about applying for an ID Card online but I was pleasantly surprised. My new ID looks amazing – exactly like the real</p>
								</blockquote>
								<div class="testimonial-author">
									<p><strong class="font-weight-extra-bold text-2">- JANE </strong>• OLD MEMBER</p>
								</div>
							</div>
						</div>
						<div>
							<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
								<div class="testimonial-author">
									<img src="{{ asset('website/media/img/clients/male.png') }}" class="img-fluid rounded-circle mb-0" alt="">
								</div>
								<blockquote>
									<p class="text-color-dark text-4 line-height-5 mb-0">After trying for years to move to England, I was finally able to travel and begin working thanks to you guys. <br> I’ll be forever grateful!</p>
								</blockquote>
								<div class="testimonial-author">
									<p><strong class="font-weight-extra-bold text-2">- HARRY</strong> • NEW MEMBBER</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row pt-5">
			<div class="col">
				<div class="row" style="text-align: justify;">
					<div class="col-md-9 mx-md-auto">
						<div class="overflow-hidden mb-3">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
								<span>We are Wasla Chorale, We </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">Dance</b>
									<b>Sing</b>
									<b>Song</b>
								</span>
								<span> Music</span>
							</h1>
						</div>
					</div>
					<div class="overflow-hidden">
						<p class="pr-5">Tootsie roll dragée danish chocolate cake wafer cake. Halvah icing powder jelly-o jelly-o sweet roll pastry muffin. Sesame snaps pie pie cupcake gingerbread carrot cake gummies. Soufflé pastry biscuit dragée brownie muffin. Tart marshmallow chocolate ice cream tiramisu. Sugar plum wafer cookie caramels pudding marzipan. Danish marzipan carrot cake cotton candy tart cookie lemon drops cupcake macaroon. Powder jelly beans macaroon. Biscuit croissant candy canes danish bonbon tootsie roll sesame snaps bonbon muffin. Danish cheesecake toffee. Tootsie roll carrot cake sweet roll halvah macaroon tart. Chocolate cake liquorice marshmallow. Halvah pastry cookie carrot cake candy pastry cookie pudding carrot cake. Gummi bears tootsie roll bonbon gummies macaroon soufflé pie. Jelly-o marzipan soufflé jelly beans fruitcake jelly-o tart bonbon pie. Tootsie roll lollipop sesame snaps marzipan liquorice donut gummies. Icing chupa chups candy icing bonbon chocolate bar apple pie danish. Dessert fruitcake cupcake caramels gummies candy jelly beans. Toffee candy muffin cupcake soufflé dessert pie liquorice chocolate cake. Dragée brownie tootsie roll topping brownie marzipan jelly jujubes gingerbread. Marshmallow carrot cake sweet roll ice cream. Chocolate dessert chocolate lollipop chocolate sweet ice cream. Cheesecake sweet roll jujubes cupcake lemon drops gummies topping bonbon donut. Apple pie pastry icing. Marzipan liquorice pie ice cream. Cupcake sugar plum chocolate bar pastry.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" style="height: 30px"></div>

@endsection
