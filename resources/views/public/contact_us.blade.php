{{-- Extends layout --}}
@extends('layout.website_default')

{{-- Content --}}
@section('content')

<div role="main" class="main">
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/website/media/img/contact_us.jpg);">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">Contact Us</h1>
					<span class="sub-title">Get In touch with Us</span>
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

	<div class="container">
		<div class="row py-4">
			<div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">
				<div class="offset-anchor" id="contact-sent"></div>
				<form id="contactFormAdvanced" action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" value="true" name="emailSent" id="emailSent">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label class="required font-weight-bold text-dark text-2">Full Name</label>
							<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" placeholder="Your full name" class="form-control" name="name" id="name" required>
						</div>
						<div class="form-group col-md-6">
							<label class="required font-weight-bold text-dark text-2">Email Address</label>
							<input type="email" value="" data-msg-required="Please enter your email address." placeholder="Your mail" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label class="required font-weight-bold text-dark text-2">Whatsapp Number</label>
							<input type="text" value="" data-msg-required="Your Whatsapp number" placeholder="Your Whatsapp number" maxlength="100" class="form-control" name="whatsapp" id="whatsapp" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12 mb-4">
							<label class="required font-weight-bold text-dark text-2">Message</label>
							<textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12 mb-5">
							<input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-5">
				<div class="overflow-hidden mb-1">
					<h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Get in <strong>Touch</strong></h4>
				</div>
				<div class="overflow-hidden mb-3">
					<p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni laboriosam blanditiis ipsa ea illo ex aliquid non cumque cum doloremque iure est ipsum vitae, beatae totam doloribus id! Eveniet, perferendis.</p>
				</div>

				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
					<h4 class="text-primary pt-5">Our <strong>Office</strong></h4>
					<ul class="list list-icons list-icons-style-3 mt-2">
						<li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 1910 East 20th street, California</li>
						<li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> 8001234567</li>
						<li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:test@gmail.com">test@gmail.com</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection
