
@extends('admin.layouts.app')

@section('title', 'About Us')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Despre Noi</h2>
		<ol class="breadcrumb">
			<li>
				<a href="index.html">Acasa</a>
			</li>
			<li>
				<a>Despre Noi</a>
			</li>
			<li class="active">
				<strong>Editare</strong>
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
    <div class="col-lg-6">
        <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
            @endif
            @if(session()->has('message'))
            <div class="alert alert-success"> 
            {!! session('message') !!}
            </div>
            @endif
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a class="nav-link active show" data-toggle="tab" href="#tab-1">Imagine</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-2">Text</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="card card-body">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="img" id="image">
                                    <label for="image" class="custom-file-label">Choose file...</label>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    @foreach(Config::get('languages') as $lang => $language)
                                <li class><a data-toggle="tab" href="#tab-{{$lang}}">{{$lang}}</a></li>
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                          
                            <div class="panel-body">
                                <div class="tab-content">
                                    @foreach(Config::get('languages') as $lang => $language)
                                <div id="tab-{{$lang}}" class="tab-pane"> 
                                    <textarea class="form-control my-editor" name="content[{{$lang}}]" id="content"></textarea>
                                </div>
                                  @endforeach
                            
                               </div>
                               
                             </div>
                            
                            </div>
                           
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Salveaza</button>
                </form>
                </div>
  
@else
<div class="tabs-container">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a class="nav-link active show" data-toggle="tab" href="#tab-1">Imagine</a></li>
        <li><a class="nav-link" data-toggle="tab" href="#tab-2">Text</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" id="tab-1" class="tab-pane active">
            <div class="panel-body">
                <div class="card card-body">
                    <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="custom-file">
                    <img src="{{asset('images/about/'.$about->imagine)}}" alt="">
                        <input type="file" class="form-control-file" name="img" id="image">
                        <label for="image" class="custom-file-label">Choose file...</label>
                    </div> 
                </div>
            </div>
        </div>
        <div role="tabpanel" id="tab-2" class="tab-pane">
            <div class="panel-body">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        @foreach($about_translation as $translation)
                    <li class><a data-toggle="tab" href="#tab-{{$translation->locale}}">{{$translation->locale}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              
                <div class="panel-body">
                    <div class="tab-content">
                        @foreach($about_translation as $translation)
                    <div id="tab-{{$translation->locale}}" class="tab-pane"> 
                        <textarea class="form-control my-editor" name="content[{{$translation->locale}}]" id="content">{{$translation->content }}</textarea>
                    </div>
                      @endforeach
                
                   </div>
                   
                 </div>
                
                </div>
               
            </div>
        </div>
   <button class="btn btn-primary" type="submit">Salveaza</button>
  </div>
</form>
</div>
@endif

@endsection
