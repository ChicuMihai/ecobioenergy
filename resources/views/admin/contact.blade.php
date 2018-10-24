
@extends('admin.layouts.app')

@section('title', 'Contacte')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Contacte</h5>
    
                        </div>
                        <div class="ibox-content">
                        <form method="POST" action="{{route('contact_store')}}" accept-charset="UTF-8" name="register" novalidate onsubmit=" return validateForm()">
                            {{ csrf_field() }}
                            @if(session()->has('message'))
                            <div class="alert alert-success"> 
                            {!! session('message') !!}
                            </div>
                            @endif
                            <div class="form-group row"><label class="col-lg-2 col-form-label">Adresa</label>
    
                            <div class="col-lg-10"><input type="text" value="{{isset($info) ? $info->adresa :''}}" placeholder="Adresa" class="form-control" name="adress"></div>
                            </div>
                            <div class="form-group row"><label class="col-lg-2 col-form-label">Telefon</label>
    
                                <div class="col-lg-10"><input type="text" value="{{isset($info) ? $info->telefon : ''}}" placeholder="Telefon" class="form-control" name="phone"></div>
                            </div>
                            
                            <div class="form-group row"><label class="col-lg-2 col-form-label">Email</label>
    
                                <div class="col-lg-10"><input type="text" value="{{isset($info) ? $info->email :''}}" placeholder="Email" class="form-control" name="email"></div>
                            </div>
                            <div class="form-group row"><label class="col-lg-2 col-form-label">Mobil</label>
    
                                <div class="col-lg-10"><input type="text" value="{{isset($info) ? $info->mobil : ''}}" placeholder="Mobil" class="form-control" name="mobile"></div>
                            </div>
                              
                            <div class="form-group row">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success" type="submit">Salveaza</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function validateForm()
{
  var fields = ["adress","phone", "email","mobile"]

  var i, l = fields.length;
  var fieldname;
  for (i = 0; i < l; i++) {
    fieldname = fields[i];
    if (document.forms["register"][fieldname].value === "") {
      alert(fieldname + " can not be empty");
      return false;
    }
  }
  return true;
}
            
         
   </script>
@endsection


