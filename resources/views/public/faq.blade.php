{{-- Extends layout --}}
@extends('layout.website_default')

{{-- Content --}}
@section('content')

<div role="main" class="main">
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/website/media/img/faq.jpg);">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">FAQ</h1>
					<span class="sub-title">Frequently Asked Questions</span>
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

	<div class="container py-2 my-5" id="main">
		<div class="row text-center text-md-left mt-4">
			<div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
				<div class="row text-center justify-content-center">
					<div class="col-4">
						<img class="img-fluid mb-4" src="{{ asset('website/media/img/icon/privacy.png') }}" alt="">
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-lg-10">
						<h2 class="font-weight-bold text-5 line-height-5 mb-2">Lorem Ipsum dolor</h2>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eos facilis sequi mollitia temporibus, architecto reprehenderit neque optio voluptates praesentium beatae expedita amet ipsam cum consequatur enim numquam nemo quibusdam!</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
				<div class="row text-center justify-content-center">
					<div class="col-4">
						<img class="img-fluid mb-4" src="{{ asset('website/media/img/icon/delivery.png') }}" alt="">
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-lg-10">
						<h2 class="font-weight-bold text-5 line-height-5 mb-2">Lorem Ipsum dolor</h2>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eos facilis sequi mollitia temporibus, architecto reprehenderit neque optio voluptates praesentium beatae expedita amet ipsam cum consequatur enim numquam nemo quibusdam!</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
				<div class="row text-center justify-content-center">
					<div class="col-4">
						<img class="img-fluid mb-4" src="{{ asset('website/media/img/icon/money_back.png') }}" alt="">
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-lg-10">
						<h2 class="font-weight-bold text-5 line-height-5 mb-2">Lorem Ipsum dolor</h2>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eos facilis sequi mollitia temporibus, architecto reprehenderit neque optio voluptates praesentium beatae expedita amet ipsam cum consequatur enim numquam nemo quibusdam!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-4">

		<div class="row">
			<div class="col">

				<h2 class="font-weight-normal text-7 mb-2 text-center">Got your own Question? <strong class="font-weight-extra-bold"> Here are some options:</strong></h2>
				<p class="lead text-center">Here are several ways to contact us </p>

				<hr class="solid my-5">

				<div class="toggle toggle-primary" data-plugin-toggle>
					<section class="toggle active">
						<label>Ipsum dolor ?</label>
						<p>Marshmallow cotton candy cheesecake. Gummies donut powder sweet roll gummi bears cotton candy cake halvah. Candy cheesecake sweet pie. Soufflé oat cake pudding oat cake cake croissant wafer toffee cheesecake. Caramels tiramisu gingerbread cookie. Soufflé caramels candy toffee marshmallow bear claw. Apple pie muffin cheesecake. Apple pie sesame snaps cheesecake sesame snaps cupcake pastry. Dragée toffee sesame snaps gingerbread lemon drops cotton candy carrot cake sweet.</p>
					</section>

					<section class="toggle">
						<label>Ipsum dolor ?</label>
						<p>Marshmallow cotton candy cheesecake. Gummies donut powder sweet roll gummi bears cotton candy cake halvah. Candy cheesecake sweet pie. Soufflé oat cake pudding oat cake cake croissant wafer toffee cheesecake. Caramels tiramisu gingerbread cookie. Soufflé caramels candy toffee marshmallow bear claw. Apple pie muffin cheesecake. Apple pie sesame snaps cheesecake sesame snaps cupcake pastry. Dragée toffee sesame snaps gingerbread lemon drops cotton candy carrot cake sweet.</p>
					</section>

					<section class="toggle">
						<label>Ipsum dolor ?</label>
						<p>Marshmallow cotton candy cheesecake. Gummies donut powder sweet roll gummi bears cotton candy cake halvah. Candy cheesecake sweet pie. Soufflé oat cake pudding oat cake cake croissant wafer toffee cheesecake. Caramels tiramisu gingerbread cookie. Soufflé caramels candy toffee marshmallow bear claw. Apple pie muffin cheesecake. Apple pie sesame snaps cheesecake sesame snaps cupcake pastry. Dragée toffee sesame snaps gingerbread lemon drops cotton candy carrot cake sweet.</p>
					</section>

					<section class="toggle">
						<label>Ipsum dolor ?</label>
						<p>Marshmallow cotton candy cheesecake. Gummies donut powder sweet roll gummi bears cotton candy cake halvah. Candy cheesecake sweet pie. Soufflé oat cake pudding oat cake cake croissant wafer toffee cheesecake. Caramels tiramisu gingerbread cookie. Soufflé caramels candy toffee marshmallow bear claw. Apple pie muffin cheesecake. Apple pie sesame snaps cheesecake sesame snaps cupcake pastry. Dragée toffee sesame snaps gingerbread lemon drops cotton candy carrot cake sweet.</p>
					</section>

					<section class="toggle">
						<label>Ipsum dolor ?</label>
						<p>Marshmallow cotton candy cheesecake. Gummies donut powder sweet roll gummi bears cotton candy cake halvah. Candy cheesecake sweet pie. Soufflé oat cake pudding oat cake cake croissant wafer toffee cheesecake. Caramels tiramisu gingerbread cookie. Soufflé caramels candy toffee marshmallow bear claw. Apple pie muffin cheesecake. Apple pie sesame snaps cheesecake sesame snaps cupcake pastry. Dragée toffee sesame snaps gingerbread lemon drops cotton candy carrot cake sweet.</p>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
