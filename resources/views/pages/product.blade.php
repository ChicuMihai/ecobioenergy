@extends('layouts.master')

@section('title','Product Info')


@section('content')


<section class="wd-title-bar">
  <div class="row">
    <div class="large-12 columns p-t-70 text-left">
      <h2 id="page-title" class="title">Informatii</h2>
    </div>
  </div>
</section>

<section class="portfolio">
  <div class="row">
    <div class="large-12 columns  wd-title-section_c">
    <div class="large-6 columns">
    <div class="wd-project hvr-underline-from-center">
    <img src="{{asset('products/thumbnails/'.$product->image)}}" class="attachment-greenenergy_portfolio wp-post-image" alt="slide_3"
                 width="500" > 
          </div>
    </div>

<div class="large-6 columns">
<div class="wd-project hvr-underline-from-center">
Informatii
<div class="titlu">Titlu</div>
{{$product->lang->title}}
<div class="Descriere">Descriere</div>
{!!$product->lang->description!!}
<div class="Pret">Pret</div>
{{$product->price}}
</div>
    </div>

    </div>
    </div>
</section>

@endsection