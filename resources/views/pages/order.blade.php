@extends('layouts.master')

@section('title')

Produse

@endsection

@section('content')

<section class="wd-title-bar">
			<div class="row">
				<div class="large-12 columns p-t-70 text-left">
					<h2 id="page-title" class="title">Comenzi</h2>
				</div>
			</div>
		</section>

	
	<section class="contact_form">
        <div class ="row">
        <div class="large-12 columns  wd-title-section_c">
					<h2>this is a title</h2>
					<h5>this is a subtitle</h5>

                </div>
                <form method="post" action="{{route('order.store') }}">
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

				{{csrf_field()}}
				<div class="large-12 columns">
				<span class="wpcf7-form-control-wrap your-status"><input  name="status" value="Persoana Fizică	" type="radio" >Persoana Fizică	
				<br>	
				<input name="status" value="Persoana Juridică	;" type="radio" ></span>Persoana Juridică
				</div>

                <div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-firstname"><input name="nume" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Nume" type="text"></span>
                    </div>
                    <div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-lastname"><input name="prenume" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Prenume" type="text"></span>
                    </div>
					<div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-phone"><input name="telefon" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Telefon" type="text"></span>
                    </div>
                    <div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-email"><input name="email" value="" size="40"
																				class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																				aria-required="true" aria-invalid="false"
																				placeholder="Email" type="email"></span>
					</div>
                   
                
                    <div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-district"><input name="raion" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Raoin" type="text"></span>
                    </div>
                    <div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-localization"><input name="localitate" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Localitate" type="text"></span>
                    </div>
                    <div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-product"><input name="produs" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Tip produs" type="text"></span>
                    </div>
                    <div class="large-6 columns">
						<span class="wpcf7-form-control-wrap your-quantity"><input name="cantitate" value="" size="40"
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Cantitate KG" type="text"></span>
                    </div>
                    <div class="large-8 columns">
						<span class="wpcf7-form-control-wrap your-details"><textarea  name="detalii" value="" size=""
																			   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																			   aria-required="true" aria-invalid="false"
																			   placeholder="Detalii adi&#355;ionale"></textarea>
						</span>
					</div>

<div class="large-12 columns text-center">
						<input value="Trimite" class="wpcf7-form-control wpcf7-submit button small" type="submit"><img class="ajax-loader"
																													src="#"
																													alt="Sending ..."
																													style="visibility: hidden;">
					</div>
					<div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
        </div>
    </section>    

@endsection