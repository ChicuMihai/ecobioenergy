
@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')


<div class="col-lg-6">
<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
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
                <li class="active"><a class="nav-link active show" data-toggle="tab" href="#tab-1">Denumirea Produs</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-2">Imagine</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-3">Descriere</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-4">Pret</a></li>
        </ul>
        <div class="tab-content">
                <div class="tab-content">
                        <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <h3>Denumirea Produs</h3>
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            @foreach($product_translation as $translation)
                                        <li class><a data-toggle="tab" href="#tab-{{$translation->locale}}">{{$translation->locale}}</a></li>
                                          @endforeach
                                        </ul>
                                      </div>
                                    </div>
                                   
                                  
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            @foreach($product_translation as $translation)
                                        <div id="tab-{{$translation->locale}}" class="tab-pane">
                                                <input type="text" class="form-control" name="title[{{$translation->id}}]" value="{{$translation->title}}">
                                          </div>
                                          @endforeach
                                    
                                       </div>
                                       
                                     </div>
                                    
                                    </div>
                    <div role="tabpanel" id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <img src="{{asset('products/thumbnails/'.$product->image)}}">
                            <div class="card card-body">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="img" id="image">
                                    <label for="image" class="custom-file-label">Choose file...</label>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" id="tab-3" class="tab-pane">
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        @foreach($product_translation as $translation)
                                    <li class><a data-toggle="tab" href="#description-{{$translation->locale}}">{{$translation->locale}}</a></li>
                                      @endforeach
                                    </ul>
                                  </div>
                                </div>
                               
                              
                                <div class="panel-body">
                                    <div class="tab-content">
                                        @foreach($product_translation as $translation)
                                    <div id="description-{{$translation->locale}}" class="tab-pane">
                                       
                                        <textarea class="form-control my-editor" name="description[{{$translation->id}}]" id="content"{!!$translation->description!!}</textarea>
                                      </div>
                                      @endforeach
                                
                                   </div>
                                   
                                 </div>
                                
                                </div>
                    <div role="tabpanel" id="tab-4" class="tab-pane">
                            <div class="panel-body">
                                    <div class="custom-title">
                                            <h3>Pret Produs</h3>
                                    <input type="number" class="form-control" name="price" step=".01" required value="{{$product->price}}">
                                    </div> 
                            </div>
                        </div>
                        
                    
                           
                        </div>
                        <button class="btn btn-primary" type="submit">Salveaza</button>
                    </div>
                   
        </div>
            </div>
           
        </form>
        </div>


  
@endsection 