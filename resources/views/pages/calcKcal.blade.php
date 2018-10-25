@extends('layouts.master')

@section('title')

Produse

@endsection

@section('content')
<style>
	sup {
    vertical-align: super;
    font-size: smaller;
}
</style>
<section class="wd-title-bar">
			<div class="row">
				<div class="large-12 columns p-t-70 text-left">
					<h2 id="page-title" class="title">Calculator Kcal</h2>
				</div>
			</div>
		</section>
<section class="calc">
<div class="row">
		<div class="large-3 columns">
				<label for="produs">Introduceti cantitatea</label>
				<input type="number" id="produs" onkeyup="calculate();">
				<input type="radio" name="produs" value="gaz" id="tip1" onchange="calculate();">m<sup>3</sup>gaz&nbsp;
				<input type="radio" name="produs" value="lemn" id="tip2"onchange="calculate();">m<sup>3</sup>lemn&nbsp;
				<input type="radio" name="produs" value="carbune" id="tip3"onchange="calculate();">m<sup>3</sup>carbune&nbsp;
				
		</div>
		<div class="large-3 columns">
				<label for="brichete">Cantitatea de brichete in KG</label>
				<input type="number" id="brichete">
		</div>
</div>
</section>


@endsection