@extends('yonetim/master_yonetim')

@section('page_header')
	Ders Detayı Ekle
@stop

@section('sayfa_aciklamasi')
	- Sisteme ekli olan derslerle ilgili daha fazla detay eklenebilir veya düzenlenebilir.
@stop

@section('icerik_yonetim')

<table border='1' width="100%">
	<tr>
		<th colspan="13" bgcolor="gold"> <center> {{$bolum->bolum_adi}} BÖLÜMÜ DERS LİSTESİ </center></th>
	</tr>
	<tr bgcolor="pink">
		<th> Dersin Adı </th>
		<th> Ön Koşul Dersleri</th>
		<th> Önerilen Dersler </th>
		<th> Veriliş Biçimi  </th>
		<th> Dili </th>
		<th> Seviyesi </th>
		<th> Türü </th>
		<th> Staj </th>
		<th> Koordinatörü </th>
		<th> Dersi Verenler </th>
		<th> Dersi Verenin Yard. </th>
		<th> İçerik </th>
		<th> Ekle </th>
	</tr>
	<?php $i=0; $sayac=0; ?>
	@foreach($dersler as $ders)
	@if($i%2 == 0)
	<tr bgcolor="white"> @else <tr> @endif 	<?php $i++ ?>
		<td> {{$ders->dersin_adi_tr}} </td>
		@foreach($dersler_detay as $detay)
			@if($detay->dersler_id == $ders->id)
			<td> {{$detay->on_kosul_dersleri}} </td>
			<td> {{$detay->onerilen_dersler}}  </td>
			<td> {{$detay->dersin_verilis_bicimi}}  </td>
			<td> {{$detay->dersin_dili}} </td>
			<td> {{$detay->dersin_seviyesi}} </td>
			<td> {{$detay->dersin_turu}} </td>
			<td> {{$detay->staj}} </td>
			<td> {{$detay->ders_koord}}</td>
			<td> {{$detay->dersi_verenler}} </td>
			<td> {{$detay->dersi_verenin_yard}} </td>
			<td> {{$detay->ders_icerik}} </td>
			<td> <a href="/Bologna_Bilgi_Sistemi/public/yonetim/DersTanimlari/ders-detay-ekle/{{$ders->id}}"> <center><img src="{{ asset('photo/edit-icon.png') }}"></center> </a></td>
			@endif
		@endforeach
	</tr>
	@endforeach
</table>

<a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/ders-tanimlari"> << Ders Tanımları Anasayfasına Geri Dön </a>

@stop


</body>
</html>