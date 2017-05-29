@extends('yonetim/master_yonetim')

@section('page_header')
	İçerik Bologna Tanımları
@stop

@section('sayfa_aciklamasi')
	- İçerik tanımlaması yapmak istediğiniz bölümü seçin
@stop

@section('icerik_yonetim')

	@foreach($bolumler as $bolum)
		@foreach($birimler as $birim)
			@if(($birim->id) == ($bolum->birim_id))
				<li> <a href="icerik-ekle/{{$bolum->id}}"> {{ $bolum->bolum_adi }} </a> >> [{{ $birim->birim_adi}} - {{$birim->derece}}]</li>
			@endif
		@endforeach
	@endforeach

@stop


	</body>
</html>