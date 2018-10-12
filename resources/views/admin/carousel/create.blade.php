@extends('admin.layouts.app')

@section('title', 'Create Carousel')

@section('content')

<div class="col-lg-6">
    <form action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="tabs-container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a class="nav-link active show" data-toggle="tab" href="#tab-1">Imagine</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-2">Text</a></li>
            </ul>
            <div class="tab-content">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
             
                <div role="tabpanel" id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                            <div class="custom-file">
                                    <h3>Imaginea trebuie sa fie 1900*700</h3>
                                    <input type="file" class="form-control-file" name="img" id="image">
                                    <label for="image" class="custom-file-label">Choose file...</label>
                            </div> 
                    </div>
                </div>
                <div role="tabpanel" id="tab-2" class="tab-pane">
                    <div class="panel-body">
                            <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                      <li class="active"><a data-toggle="tab" href="#tab-RO">RO</a></li>
                                      <li class=""><a data-toggle="tab" href="#tab-RU">RU</a></li>
                                      <li class=""><a data-toggle="tab" href="#tab-EN">EN</a></li>
                                      <li class=""><a data-toggle="tab" href="#tab-DE">DE</a></li>
                                      <li class=""><a data-toggle="tab" href="#tab-IT">IT</a></li>
                                    </ul>
                                  </div>
                                </div>
                             
                                <div class="panel-body">
                                  <div class="tab-content">
                                    <div id="tab-RO" class="tab-pane active">
                                      <textarea class="form-control my-editor" name="content[ro]" id="content">{{ old('content') }}</textarea>
                              
                                    </div>
                              
                                    <div id="tab-RU" class="tab-pane">
                                     <textarea class="form-control my-editor" name="content[ru]" id="content">{{ old('content') }}</textarea>
                              
                                   </div>
                              
                                   <div id="tab-EN" class="tab-pane">
                                     <textarea class="form-control my-editor" name="content[en]" id="content">{{ old('content') }}</textarea>
                              
                                   </div>
                              
                                   <div id="tab-DE" class="tab-pane">
                                    <textarea class="form-control my-editor" name="content[de]" id="content">{{ old('content') }}</textarea>
                                  </div>
                              
                                  <div id="tab-IT" class="tab-pane">
                                   <textarea class="form-control my-editor" name="content[it]" id="content">{{ old('content') }}</textarea>
                              
                                 </div>
                               </div>
                    </div>
                </div>
                <button class="btn btn-primary"type="submit">Salveaza</button>
              
            </div>


        </div>
    </form> 
    </div>

@endsection