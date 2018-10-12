
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
<form action="{{url('/aboutedit/create')}}">
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

 <div class="panel-body">
 </div>
 <div class="clear"></div>
 <button class="btn btn-primary" type="submit">Salveaza</button>
</form>
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
