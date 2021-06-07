<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>

<head>
  <meta charset="utf-8" />

  {{-- Title Section --}}
  <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

  {{-- Meta Data --}}
  <meta name="description" content="@yield('page_description', $page_description ?? '')" />
  <meta name="keywords" content="@yield('page_keywords', $page_keywords ?? '')" />
  <meta name="author" content="@yield('bpsmartdesign', $page_author ?? 'bpsmartdesign')" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  {{-- Favicon --}}
  <link rel="shortcut icon" href="{{ asset('website/media/img/logo.png') }}" />

  {{-- Global Theme Styles (used by all pages) --}}
  @foreach(config('layout.website_resources.css') as $style)
  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css" />
  @endforeach

  {{-- Includable CSS --}}
  @yield('styles')
</head>

<body class="nav-md">

	<div class="body">
		<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body border-top-0 bg-dark box-shadow-none">
				<div class="header-container container-fluid px-lg-4">
					<div class="header-row">
						<div class="header-column flex-grow-0">
							<div class="header-row pr-4">
								<div class="header-logo">
									<a href="/">
										<img alt="Chorale Wasla" width="82" height="40" src="{{ asset('website/media/img/logo.png') }}">
									</a>
								</div>
							</div>
						</div>
						<div class="header-column">
							<div class="header-row">
								<div class="header-nav header-nav-line header-nav-bottom-line header-nav-light-text justify-content-center">
									<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1 nav-color-light">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<li><a class="dropdown-item" href="/">Home</a></li>
												<li><a class="dropdown-item" href="/about_us">About Us</a></li>
												<li><a class="dropdown-item" href="/event">Events</a></li>
												<li><a class="dropdown-item" href="/faq">FAQ</a></li>
												<li><a class="dropdown-item" href="/contact_us">contact us</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
						<div class="header-column flex-grow-0 justify-content-center">
							<div class="header-row pl-4 justify-content-end">
								<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light m-0">
									<li class="social-icons-facebook"><a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="#" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
								<button class="btn header-btn-collapse-nav ml-0 ml-sm-3" data-toggle="collapse" data-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="main" role="main">
			@yield('content')
		</div>

		<footer id="footer" class="mt-0">
			<div class="container">
				<div class="footer-ribbon">
					<span>Get in Touch</span>
				</div>
				<div class="row py-5 my-4">
					<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
						<h5 class="text-3 mb-3">NEWSLETTER</h5>
						<p class="pr-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
						<div class="alert alert-success d-none" id="newsletterSuccess">
							<strong>Success!</strong> You've been added to our email list.
						</div>
						<div class="alert alert-danger d-none" id="newsletterError"></div>
						<form id="newsletterForm" action="" method="POST" class="mr-4 mb-3 mb-md-0">
							<div class="input-group input-group-rounded">
								<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
								<span class="input-group-append">
									<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
								</span>
							</div>
						</form>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
						<h5 class="text-3 mb-3">LATEST TWEETS</h5>
						<div id="tweet" class="twitter">
							<p>Please wait...</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<div class="contact-details">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<ul class="list list-icons list-icons-lg">
								<li class="mb-1">
									<i class="far fa-dot-circle text-color-primary"></i>
									<p class="m-0">1910 East 20th street, California</p>
								</li>
								<li class="mb-1">
									<i class="fab fa-whatsapp text-color-primary"></i>
									<p class="m-0">
										<a href="tel:8001234567">8001234567</a>
									</p>
								</li>
								<li class="mb-1">
									<i class="far fa-envelope text-color-primary"></i>
									<p class="m-0">
										<a href="mailto:test@gmail.com">test@gmail.com</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<h5 class="text-3 mb-3">FOLLOW US</h5>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-twitter"><a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="#" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container py-2">
					<div class="row py-4">
						<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
							<a href="/" class="logo pr-0 pr-lg-3">
								<img alt="Porto Website Template" src="{{ asset('website/media/img/logo.png') }}" class="opacity-5" height="33">
							</a>
						</div>
						<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
							<p>© Copyright 2011 - 2021. All Rights Reserved.</p>
						</div>
						<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
							<nav id="sub-menu">
								<ul>
									<li><i class="fas fa-angle-right"></i><a href="/faq" class="ml-1 text-decoration-none"> FAQ's</a></li>
									<li><i class="fas fa-angle-right"></i><a href="/" class="ml-1 text-decoration-none"> Sitemap</a></li>
									<li><i class="fas fa-angle-right"></i><a href="/my_space" class="ml-1 text-decoration-none"> Personnal space</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

  {{-- Global Theme JS Bundle (used by all pages)  --}}
  @foreach(config('layout.website_resources.js') as $script)
  <script src="{{ asset($script) }}" type="text/javascript"></script>
  @endforeach

  {{-- Includable JS --}}
  @yield('scripts')

</body>

</html>
