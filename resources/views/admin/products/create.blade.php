@extends('admin.layouts.app')

@section('title', 'Create Carousel')

@section('content')

<div class="col-lg-6">
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="tabs-container">
            <ul class="nav nav-tabs" role="tablist">
                 <li class="active"><a class="nav-link active show" data-toggle="tab" href="#tab-1">Denumirea Produs</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-2">Imagine</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-3">Descriere</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-4">Pret</a></li>
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
                @if(session()->has('success'))
                <div class="alert alert-success"> 
                {!! session('success') !!}
                </div>
                 @endif
                <div role="tabpanel" id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                                <h3>Denumirea Produs</h3>
                                <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#title-RO">RO</a></li>
                                          <li class=""><a data-toggle="tab" href="#title-RU">RU</a></li>
                                          <li class=""><a data-toggle="tab" href="#title-EN">EN</a></li>
                                          <li class=""><a data-toggle="tab" href="#title-DE">DE</a></li>
                                          <li class=""><a data-toggle="tab" href="#title-IT">IT</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                 
                                    <div class="panel-body">
                                      <div class="tab-content">
                                        <div id="title-RO" class="tab-pane active">
                                            <input type="text" class="form-control" name="title[ro]" id="title-ro" required>
                                        </div>
                                  
                                        <div id="title-RU" class="tab-pane">
                                                <input type="text" class="form-control" name="title[ru]" id="title-ru" required>
                                  
                                       </div>
                                  
                                       <div id="title-EN" class="tab-pane">
                                            <input type="text" class="form-control" name="title[en]" id="title-en" required>
                                  
                                       </div>
                                  
                                       <div id="title-DE" class="tab-pane">
                                            <input type="text" class="form-control" name="title[de]" id="title-de" required>
                                      </div>
                                  
                                      <div id="title-IT" class="tab-pane">
                                            <input type="text" class="form-control" name="title[it]" id="title-it" required>
                                     </div>
                                   </div>
                        </div>
                    </div>
             
                <div role="tabpanel" id="tab-2" class="tab-pane">
                    <div class="panel-body">
                            <div class="custom-file">
                                    <h3>Imaginea</h3>
                                    <input type="file" class="form-control-file" name="img" id="image" required>
                                    <label for="image" class="custom-file-label">Choose file...</label>
                            </div> 
                    </div>
                </div>
                <div role="tabpanel" id="tab-3" class="tab-pane">
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
                                      <textarea class="form-control my-editor" name="description[ro]" id="description-ro">{{ old('content') }}</textarea>
                              
                                    </div>
                              
                                    <div id="tab-RU" class="tab-pane">
                                     <textarea class="form-control my-editor" name="description[ru]" id="description-ru">{{ old('content') }}</textarea>
                              
                                   </div>
                              
                                   <div id="tab-EN" class="tab-pane">
                                     <textarea class="form-control my-editor" name="description[en]" id="description-en">{{ old('content') }}</textarea>
                              
                                   </div>
                              
                                   <div id="tab-DE" class="tab-pane">
                                    <textarea class="form-control my-editor" name="description[de]" id="description-de">{{ old('content') }}</textarea>
                                  </div>
                              
                                  <div id="tab-IT" class="tab-pane">
                                   <textarea class="form-control my-editor" name="description[it]" id="description-it">{{ old('content') }}</textarea>
                              
                                 </div>
                               </div>
                    </div>
                </div>
                <div role="tabpanel" id="tab-4" class="tab-pane">
                        <div class="panel-body">
                                <div class="custom-title">
                                        <h3>Pret Produs</h3>
                                        <input type="number" class="form-control" name="price" step=".01" required>
                                </div> 
                        </div>
                    </div>
                <button class="btn btn-primary"type="submit">Salveaza</button>
              
            </div>


        </div>
    </form> 
    </div>
@endsection