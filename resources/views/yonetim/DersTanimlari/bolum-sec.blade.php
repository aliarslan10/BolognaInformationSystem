@extends('yonetim/master_yonetim')

@section('page_header')
	Bölüm Seç
@stop

@section('sayfa_aciklamasi')
	- Ders eklemek istediğiniz bölümün üzerine tıklayın.
@stop


@section('icerik_yonetim')

	@foreach($bolumler as $bolum)
		@foreach($birimler as $birim)
			@if(($birim->id) == ($bolum->birim_id))
				<li> <a href="ders-ekle/{{$bolum->id}}"> {{ $bolum->bolum_adi }} </a> >> [{{ $birim->birim_adi}} - {{$birim->derece}}]</li>
			@endif
		@endforeach
	@endforeach

@stop

	</body>
</html>