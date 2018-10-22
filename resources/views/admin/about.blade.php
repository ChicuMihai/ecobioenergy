
@extends('admin.layouts.app')

@section('title', 'About Us')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>About Us</h2>
		<ol class="breadcrumb">
			<li>
				<a href="index.html">Home</a>
			</li>
			<li>
				<a>About Us</a>
			</li>
			<li class="active">
				<strong>Edit</strong>
			</li>
		</ol>
	</div>
	<div class="col-lg-2">

	</div>
</div>

<div class="wrapper wrapper-content">
    @if(session()->has('message'))
    <div class="alert alert-success"> 
    {!! session('message') !!}
    </div>
    @endif

  <div class="panel-heading">
      <ul class="nav nav-tabs">
      @foreach($about_translation as $translation)
        <li class><a data-toggle="tab" href="#tab-{{$translation->locale}}">{{$translation->locale}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>



<form action="{{route('about.store')}}" method="POST">
  {{ csrf_field() }}
  
  <div class="panel-body">
    
      <div class="tab-content">
       @foreach($about_translation as $translation)
      <div id="tab-{{$translation->locale}}" class="tab-pane">
            <textarea class="form-control my-editor" name="content[{{$translation->locale}}]" id="content">{!!$translation->content!!}</textarea>
      </div>
      @endforeach

     
   </div>
  </div>

 
 <div class="clear"></div>
 <button class="btn btn-primary" type="submit">Salveaza</button>
</form>
</div>


@endsection
