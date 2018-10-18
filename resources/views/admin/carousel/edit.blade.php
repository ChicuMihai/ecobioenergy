
@extends('admin.layouts.app')

@section('title', 'Edit Carousel')

@section('content')


<div class="col-lg-6">
<form action="{{route('carousel.update',$carousel->id)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
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
                    <img src="{{asset('slides/'.$carousel->image)}}" width="300px">
                    <div class="card card-body">
                        <div class="custom-file">
                            <h3>Imaginea trebuie sa fie 1900*700</h3>
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
                            @foreach($carousel_translation as $translation)
                        <li class><a data-toggle="tab" href="#tab-{{$translation->locale}}">{{$translation->locale}}</a></li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  
                    <div class="panel-body">
                        <div class="tab-content">
                            @foreach($carousel_translation as $translation)
                        <div id="tab-{{$translation->locale}}" class="tab-pane">
                           
                            <textarea class="form-control" name="content[{{$translation->id}}]" id="content"{!!$translation->content!!}</textarea>
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


  
@endsection 