@extends('layouts.master')

@section('title')

Despre noi

@endsection

@section('content')

	<section class="wd-title-bar">
			<div class="row">
				<div class="large-12 columns p-t-70 text-left">
					<h2 id="page-title" class="title">About Us</h2>
				</div>
			</div>
		</section>
		<section><div class="row">{!!isset($about)?$about->lang->content:''!!}</div></section>
			
	
		{{-- <section class="green_solar">
			<div class="row">
				<div class="large-12 columns  wd-title-section_c">
					<h2>We Are Green Solar</h2>
					<h5>We have the latest technologies</h5>

				</div>
				<div class="large-6 small-12 columns">
					<div class="">
						<img class=" " src="images/z2-570x370.jpg" alt="z2" title="z2" width="570" height="370"></div>
				</div>
				<div class="large-6 small-12 columns">
					<div class="wd-title-block">
						<h5>Why Choose Us</h5>
					</div>
					<p>We Are solar the simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
						it to make. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,We
						Are solar the simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry’s
						standard.</p>
					<div class="row p-t-30">
						<div class="large-6 columns">
							<ul class="list-icon check-square-o">
								<li>We are awesome people to meet</li>
								<li>We’re happy to help in the purchase</li>
								<li>We have the latest technologies</li>
								<li>Sed ut perspiciatis unde omnis</li>
							</ul>
						</div>
						<div class="large-6 columns">
							<ul class="list-icon check-square-o">
								<li>The quality is our goal</li>
								<li>Optimizing the resource is good</li>
								<li>Printer took a galley of type and</li>
								<li>We are awesome people to meet</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section> --}}


@endsection