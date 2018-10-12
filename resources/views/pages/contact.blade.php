@extends('layouts.master')

@section('title')

Produse

@endsection

@section('content')

<section class="wd-title-bar">
			<div class="row">
				<div class="large-12 columns p-t-70 text-left">
					<h2 id="page-title" class="title">Contact</h2>
				</div>
			</div>
		</section>
		<section class="contact_form">
			<div class="row">
				<div class="large-12 columns  wd-title-section_c">
					<h2>this is a title</h2>
					<h5>this is a subtitle</h5>

				</div>
				<form>
					<div class="large-4 columns">
						<span class="wpcf7-form-control-wrap your-name"><input name="your-name" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Name" type="text"></span>
					</div>
					<div class="large-4 columns">
						<span class="wpcf7-form-control-wrap your-email"><input name="your-email" value="" size="40"
																				class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																				aria-required="true" aria-invalid="false"
																				placeholder="mail" type="email"></span>
					</div>
					<div class="large-4 columns">
						<span class="wpcf7-form-control-wrap your-name"><input name="your-name" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Name" type="text"></span>
					</div>
					<div class="large-12 columns">
						<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10"
																					 class="wpcf7-form-control wpcf7-textarea"
																					 aria-invalid="false"
																					 placeholder="Message"></textarea></span>
					</div>
					<div class="large-12 columns text-center">
						<input value="Send" class="wpcf7-form-control wpcf7-submit button small" type="submit"><img class="ajax-loader"
																													src="#"
																													alt="Sending ..."
																													style="visibility: hidden;">
					</div>
					<div class="wpcf7-response-output wpcf7-display-none"></div>
				</form>
			</div>
		</section>
		<section class="wd-section-call-to-action  ">
			<div class="row call-to-action">
				<div class="large-8 columns">
					<h4>OUR EXPERTIES</h4>
					<p>From the start, we’ve always tried to do things properly. So it’s heart-warming to get recognition from people
						who feel the same way</p>
				</div>
				<div class="large-4 columns">
					<div class="wd-call-to-action-btn">
						<a href="#">VIEW MORE</a>
					</div>
				</div>
			</div>
		</section>
		<section class="wd-section-map">
			<div class="map">
				<div id="map-canvas" style="height: 490px; position: relative; background-color: #e5e3df; overflow: hidden;"
					 data-decription="" data-companyname="Solar Offices" data-zoom="11" data-longitude="-74.000335"
					 data-latitude="40.719789">
				</div>
			</div>
		</section>


@endsection