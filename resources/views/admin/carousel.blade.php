@extends('admin.layouts.app')

@section('title', 'About Us')

@section('content')


    
    <div class="col-lg-6">
      <div class="tabs-container">
          <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a class="nav-link" data-toggle="tab" href="#tab-1">Slider 1</a></li>
              <li><a class="nav-link" data-toggle="tab" href="#tab-2">Slider 2</a></li>
              <li><a class="nav-link" data-toggle="tab" href="#tab-3">Slider 3</a></li>
          </ul>
          <div class="tab-content">
              <div role="tabpanel" id="tab-1" class="tab-pane active">
                  <div class="panel-body">
                    <p>
                     <a class="btn btn-primary" data-toggle="collapse" href="#uploadImage" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Upload Image
                      </a>
                    </p>
                    <p><a href="#content" class="btn btn-primary"data-toggle="collapse">Text</a></p>

                    <form action="{{url('/carousel')}}" enctype="multipart/form-data" method="POST">
                      {{csrf_field()}}
                      <div class="collapse" id="uploadImage">
                        <div class="card card-body">
                            <div class="custom-file">
                                <input type="file" class="form-control-file" name="img" id="image">
                                <label for="image" class="custom-file-label">Choose file...</label>
                            </div> 
                        </div>
                      </div>

                      <div class="collapse" id="content">
                          <div class="card card-body">
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
                      <button class="btn btn-danger">Salveaza</button>
                    </form>
                    </div>
                   
          </div>

          <div role="tabpanel" id="tab-2" class="tab-pane">
              <div class="panel-body">
                <p>
                 <a class="btn btn-primary" data-toggle="collapse" href="#uploadImage2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Upload Image
                  </a>
                </p>
                <p><a href="#content2" class="btn btn-primary"data-toggle="collapse">Text</a></p>

                <form action="{{url('/carousel/create')}}" enctype="multipart/form-data">
                  <div class="collapse" id="uploadImage2">
                    <div class="card card-body">
                        <div class="custom-file">
                            <input id="logo" type="file" class="custom-file-input" name="image">
                            <label for="logo" class="custom-file-label">Choose file...</label>
                        </div> 
                    </div>
                  </div>

                  <div class="collapse" id="content2">
                      <div class="card card-body">
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
                  <button class="btn btn-danger">Salveaza</button>
                </form>
                </div>  
      </div>


      <div role="tabpanel" id="tab-3" class="tab-pane">
          <div class="panel-body">
            <p>
             <a class="btn btn-primary" data-toggle="collapse" href="#uploadImage3" role="button" aria-expanded="false" aria-controls="collapseExample">
                Upload Image
              </a>
            </p>
            <p><a href="#content3" class="btn btn-primary"data-toggle="collapse">Text</a></p>

            <form action="{{url('/carousel/create')}}" enctype="multipart/form-data">
              <div class="collapse" id="uploadImage3">
                <div class="card card-body">
                    <div class="custom-file">
                        <input id="logo" type="file" class="custom-file-input" name="image">
                        <label for="logo" class="custom-file-label">Choose file...</label>
                    </div> 
                </div>
              </div>

              <div class="collapse" id="content3">
                  <div class="card card-body">
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
              <button class="btn btn-danger">Salveaza</button>
            </form>
            </div>
           
  </div>



      </div>
    </div>
   
    
          
      
    
             
  <script src="{{URL::to('src/js/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
  <script>
    var editor_config = {
      path_absolute : "{{ url('/') }}/",
      selector: "textarea.my-editor",
      plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };
  
    tinymce.init(editor_config);
  </script>
        


    


@endsection