@extends('layouts.master')

@section('title')

Ecobioenergy

@endsection

@section('content')

	<section class="slider">
			<ul class="example-orbit " data-orbit>
				@foreach($carousel as $slide)
				<li class="slide-1 active">
				<img src="{{asset('slides/'.$slide->image)}}" alt="slide 1"/>
					<div class="row">
						<div class="orbit-caption animated " data-animated="fadeInUp">
							<p></p>
							<h3>{!!$slide->lang->content!!}</h3>
							<a href="#" class="button small">READ MORE</a>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</section>
		<section class="provide">
			<div class="row">
				<div class="large-12 columns clearfix  wd-title-section_c">
					<h2>{{ __('home.home_title') }}</h2>
					<h5> {{ __('home.home_info') }}</h5>

				</div>
				@foreach($products as $product)
				<div class="large-4 small-12 columns clearfix">
					<div class="wd-section-blog-services text-center style-3 anim-on">
						<article class="layout-2  ">
							<div class="wd-blog-post nohover">
								<div class="svg-wrapper">
									<svg width="172" height="172" xmlns="http://www.w3.org/2000/svg">
									<rect height="166" width="166" class="shape"></rect>
									</svg>
									<div class="img-wrapper">

									<img src="{{asset('products/thumbnails/'.$product->image)}}" alt="icon">
									</div>
								</div>
							<a href="{{url('productinfo',$product->id)}}"><h4 class="wd-title-element">{{$product->lang->title}}</h4></a>
							{{-- {!!$product->lang->description!!} --}}
								
							</div>
						</article>
					</div>
				</div>
				@endforeach
				{{-- <div class="large-4 small-12 columns">
					<div class="wd-section-blog-services text-center style-3 anim-on">
						<article class="layout-2  ">
							<div class="wd-blog-post nohover">
								<div class="svg-wrapper">
									<svg width="172" height="172" xmlns="http://www.w3.org/2000/svg">
									<rect height="166" width="166" class="shape"></rect>
									</svg>
									<div class="img-wrapper">

										<img src="images/blog-post1.jpg" alt="icon">
									</div>
								</div>
								<h4 class="wd-title-element">RESIDENTIAL</h4>
								<p>
									As the world's largest green and clean egerngy specialist of the printing and typesetting industry. Lorem
									has been the industry. </p>
							</div>
						</article>
					</div>
				</div>
				<div class="large-4 small-12 columns">
					<div class="wd-section-blog-services text-center style-3 anim-on">
						<article class="layout-2  ">
							<div class="wd-blog-post nohover">
								<div class="svg-wrapper">
									<svg width="172" height="172" xmlns="http://www.w3.org/2000/svg">
									<rect height="166" width="166" class="shape"></rect>
									</svg>
									<div class="img-wrapper">

										<img src="images/blog-post2.jpg" alt="icon">
									</div>
								</div>
								<h4 class="wd-title-element">COMMERCIAL</h4>
								<p>
									As the world's largest green and clean egerngy specialist of the printing and typesetting industry. Lorem
									has been the industry. </p>
							</div>
						</article>
					</div>
				</div> --}}
			</div>
		</section>
		
		
		{{-- <section class="latest_project">
			<div class="row">
				<div class="large-12 columns  wd-title-section_c">
					<h2>Latest Projects</h2>
					<h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
						aperiam.</h5>

				</div>
				<div class="wd-section-project">


					<ul class="masque portfolio-grid small-block-grid-1	 medium-block-grid-2 large-block-grid-3">
						<li class="animated  fadeInUp" data-animated="fadeInUp" style="opacity: 1; animation-delay: 0ms;">
							<div class="wd-project hvr-underline-from-center">
								<img src="images/slide_3-380x254.jpg"
									 class="attachment-greenenergy_portfolio wp-post-image" alt="slide_3" width="380" height="254"> <a
									 href="#"><h4>Swedish Mega Project</h4>
								</a>

								<p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
							</div>

						</li>
						<li class="animated  fadeInUp" data-animated="fadeInUp" style="opacity: 1; animation-delay: 300ms;">
							<div class="wd-project hvr-underline-from-center">
								<img src="images/project_5-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
									 alt="project_5" width="380" height="254"> <a
									 href="#"><h4>So to deliberately
										render</h4></a>

								<p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
							</div>

						</li>
						<li class="animated  fadeInUp" data-animated="fadeInUp" style="opacity: 1; animation-delay: 600ms;">
							<div class="wd-project hvr-underline-from-center">
								<img src="images/project_6-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
									 alt="project_6" width="380" height="254"> <a
									 href="#"><h4>Frozen Trees In A
										Lake</h4></a>

								<p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
							</div>

						</li>
					</ul>
				</div>
				<div class="wd-more-project animated text-center" data-animated="flipInX"
					 style="opacity: 1; animation-delay: 900ms;"><a
						class="button small radius" href="#"><i
							class="fa fa-hand-o-right"></i> MOREE PROJECT</a></div>
			</div>
		</section> --}}
	

@endsection