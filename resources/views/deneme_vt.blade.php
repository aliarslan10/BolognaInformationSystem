<ul>

@foreach($birimler as $birim)

<li>{{ $birim->BIRIM }}
	
	@foreach($bolumler as $bolum)

		@if(($bolum->BIRIM_ID) == ($birim->ID))

	    	<ul>
			<li>{{ $bolum->BOLUM }}</li>
			</ul></li>

		@endif

	@endforeach

@endforeach

</ul>