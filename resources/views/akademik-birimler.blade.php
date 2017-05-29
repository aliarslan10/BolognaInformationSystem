@extends('master')

@section('content')
<!-- Page Content -->

<ul>

<div class="sol">
	<h3> 
		@foreach($birimler as $birim)
			@if(($ingilizce) == 1)
				{{ $birim->derece_adi_en }}
			@else
				{{ $birim->derece }}
			@endif
			<?php break; ?>
		@endforeach
	</h3>
</div>

<br /><br />
<div class="sag" style="text-align: right;">
	(<a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisiLink}}">TR</a> /
	<a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisiLink}}">EN</a>)
</div>
<hr style="margin-bottom:15px;">

<div class="orta">
@foreach($birimler as $birim)

	<li> <b> {{ $birim->birim_adi }} {{ $birim->birim_adi_en }} </b>

		@foreach($bolumler as $bolum)
			@if(($bolum->durum) == '1')
				@if(($bolum->birim_id) == ($birim->id))
				<ul>
				@if(($ingilizce) == 1)
					<li><a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisiLink}}/{{$bolum->bolum_adi_link}}/amac/{{$bolum->id}}"> {{ $bolum->bolum_adi_en }}</a></li>
				@else
					<li><a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisiLink}}/{{$bolum->bolum_adi_link}}/amac/{{$bolum->id}}"> {{ $bolum->bolum_adi }} </a></li>
				@endif
				</ul>
				@endif
			@endif
		@endforeach
	</li>
@endforeach
</div>
<br />
@stop