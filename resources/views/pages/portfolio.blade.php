@extends('layouts.master')

@section('title')

Produse

@endsection

@section('content')

<section class="wd-title-bar">
  <div class="row">
    <div class="large-12 columns p-t-70 text-left">
      <h2 id="page-title" class="title">Portfolio columns</h2>
    </div>
  </div>
</section>
<section class="portfolio">
  <div class="row">
    <div class="large-12 columns  wd-title-section_c">
      <h2>Portfolio four columns</h2>
      <h5>Neque porro quisquam est qui dolorem ipsum quia lorem ipsum dolor sit amet dolor sit amet, consectetur,
        adipisci velit</h5>

    </div>
    <div class="wd-section-project">


      <ul class="masque portfolio-grid small-block-grid-1	 medium-block-grid-2 large-block-grid-4">
          @foreach($products as $product)
        <li class="">
         

          <div class="wd-project hvr-underline-from-center">
          <img src="{{asset('products/thumbnails/'.$product->image)}}" class="attachment-greenenergy_portfolio wp-post-image" alt="slide_3"
          width="380" height="254"> <a href="{{url('productinfo/'.$product->id)}}"><h4>{{$product->lang->title}}</h4></a>

            {!!$product->lang->description!!}
          </div>
          @endforeach
{{-- 
        </li>
         <li class="">
          <div class="wd-project hvr-underline-from-center">
            <img src="images/project_5-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
                 alt="project_5" width="380" height="254"> <a href="{{route('productinfo')}}"><h4>So to deliberately render</h4></a>

            <p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
          </div>

        </li>
        {{-- <li class="">
          <div class="wd-project hvr-underline-from-center">
            <img src="images/project_6-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
                 alt="project_6" width="380" height="254"> <a href="{{route('productinfo')}}"><h4>Frozen Trees In A Lake</h4></a>

            <p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
          </div>

        </li>
        <li class="">
          <div class="wd-project hvr-underline-from-center">
            <img src="images/project_7-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
                 alt="project_7" width="380" height="254"> <a
            href="{{route('productinfo')}}"><h4>Consectetur
            adipiscing</h4></a>

            <p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
          </div>

        </li>
        <li class="">
          <div class="wd-project hvr-underline-from-center">
            <img src="images/project_8-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
                 alt="project_8" width="380" height="254"> <a
            href="{{route('productinfo')}}"><h4>Consectetur
            adipiscing</h4></a>

            <p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
          </div>

        </li>
        <li class="">
          <div class="wd-project hvr-underline-from-center">
            <img src="images/project_9-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
                 alt="project_9" width="380" height="254"> <a
            href="{{route('productinfo')}}"><h4>Consectetur
            adipiscing</h4></a>

            <p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
          </div>

        </li>
        <li class="">
          <div class="wd-project hvr-underline-from-center">
            <img src="images/project_10-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
                 alt="project_10" width="380" height="254"> <a
            href="{{route('productinfo')}}"><h4>Consectetur
            adipiscing</h4></a>

            <p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
          </div>

        </li>
        <li class="">
          <div class="wd-project hvr-underline-from-center">
            <img src="images/project_11-380x254.jpg" class="attachment-greenenergy_portfolio wp-post-image"
                 alt="project_11" width="380" height="254"> <a
            href="{{route('productinfo')}}"><h4>Consectetur adipiscing</h4>
          </a>

            <p> DESIGN<span>- </span> INTERIOR<span>- </span> OFFICE<span>- </span></p>
          </div>

        </li> --}} 
      </ul>
    </div>
  </div>
</section>

@endsection