
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
    @if(empty($about))
    <div role="tabpanel" id="tab-2" class="tab-pane">
      <div class="panel-body">
          <form action="{{route('about.store')}}" method="POST">
              {{ csrf_field() }}
              
              <div class="panel-heading">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-RO">ro</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-RU">ru</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-EN">en</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-DE">de</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-IT">it</a></li>
                      </ul>
                    </div>
                  </div>
               
                  <div class="panel-body">
                    <div class="tab-content">
                      <div id="tab-RO" class="tab-pane active">
                        <textarea class="form-control my-editor" name="content[ro]" id="content"></textarea>
                
                      </div>
                
                      <div id="tab-RU" class="tab-pane">
                       <textarea class="form-control my-editor" name="content[ru]" id="content"></textarea>
                
                     </div>
                
                     <div id="tab-EN" class="tab-pane">
                       <textarea class="form-control my-editor" name="content[en]" id="content"></textarea>
                
                     </div>
                
                     <div id="tab-DE" class="tab-pane">
                      <textarea class="form-control my-editor" name="content[de]" id="content"></textarea>
                    </div>
                
                    <div id="tab-IT" class="tab-pane">
                     <textarea class="form-control my-editor" name="content[it]" id="content"></textarea>
                
                   </div>
                 </div>
      </div>
      <button class="btn btn-primary"type="submit">Salveaza</button>
    </form>
  </div>
  
@else
  <div class="panel-heading">
      <ul class="nav nav-tabs">
      @foreach($about_translation as $translation)
        <li class><a data-toggle="tab" href="#tab-{{$translation->locale}}">{{$translation->locale}}</a></li>
        @endforeach
      </ul>
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
   <button class="btn btn-primary" type="submit">Salveaza</button>
  </div>
</form>
</div>
@endif

@endsection
