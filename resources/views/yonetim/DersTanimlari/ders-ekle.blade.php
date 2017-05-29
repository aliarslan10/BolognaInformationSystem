@extends('yonetim/master_yonetim')

@section('page_header')
	Ders Bologna Tanımları
@stop

@section('sayfa_aciklamasi')
	- Yeni ders ekleme formu ve bölüme ait daha önceden ekli olan dersleri görüntüleme sayfası
@stop

@section('icerik_yonetim')
	
<table border='0' width="50%">
	{!! Form::open(['route' => 'dersekle']) !!}

	<tr>
	<td> Dersin Türkçe Adı 		 </td>
	<td> {!! Form::text('dersin_adi_tr',null, ['size' => '50x5']) !!}  </td>
	</tr>

	<tr>
	<td>  Dersin İngilizce Adı 	   </td>
	<td>  {!! Form::text('dersin_adi_en', null, ['size' => '50x5']) !!}  </td>
	</tr>

	<tr>
	<td> Dersin Yarıyılı
	<td> {!! Form::select('dersin_yariyili',
						   array('0'=>'Seçiniz', '1'=>'1. Yarıyıl', '2'=>'2. Yarıyıl', '3'=>'3. Yarıyıl', '4' => '4. Yarıyıl', '5' => '5. Yarıyıl',
						   		 '6' => '6. Yarıyıl', '6' => '6. Yarıyıl', '7' => '7. Yarıyıl', '8' => '8. Yarıyıl')) !!}
	</td>
	</tr>

	<tr>
	<td> Ortalama Durumu </td>
	<td> {!! Form::select('ortalama_durumu', array('0'=>'Seçiniz', '1'=>'Girer', '2'=>'Girmez', '3'=>'Notlu Girer')) !!}
	</tr>
	
	<tr>
	<td> Zorunluluk Durumu (TR)
	<td> {!! Form::radio('zorunluluk_durumu','Zorunlu') !!} Zorunlu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  {!! Form::radio('zorunluluk_durumu','Seçmeli') !!} Seçmeli</td>
	</tr>

	<tr>
	<td> Zorunluluk Durumu (EN)
	<td> {!! Form::radio('zorunluluk_durumu_en','Compulsory') !!} Compulsory &nbsp;  {!! Form::radio('zorunluluk_durumu_en','Elective') !!} Elective</td>
	</tr>
	
	<tr>
	<td> Dersin Saati </td>
	<td> {!! Form::text('dersin_saati','', ['size'=>'50x5']) !!} </td>  
	</tr>
	
	<tr>
	<td> Dersin Uygulama Saati </td>
	<td> {!! Form::text('dersin_uygulama_saati', '', ['size'=>'50x5']) !!} </td>  
	</tr>
	
	<tr>
	<td> Dersin Lab. Saati </td>
	<td> {!! Form::text('dersin_lab_saati', '', ['size'=>'50x5']) !!} </td>  
	</tr>
		
	<tr>
	<td> Dersin Kredisi </td>
	<td> {!! Form::text('dersin_kredisi', '', ['size'=>'50x5']) !!} </td>  
	</tr>
	

	<tr>
	<td> Bölüm Kodu </td>
	<td> {!! Form::text('bolum_kodu', '', ['size'=>'50x5']) !!} </td>  
	</tr>
	
	<tr>
	<td> Dersin Kodu </td>
	<td> {!! Form::text('ders_kodu', null, ['size'=>'50x5']) !!} </td>  
	</tr>

	<tr>
	<td> <input type='hidden' name='bolum_id' value='{{ $bolum->id }}'/> </td>
	<td>
		{!! Form::submit('Dersi Ekle', ['size'=>'50x5']) !!}{!! Form::close() !!} <!-- close burada olmazsa iptal butonu submit eder-->
		<a href="/Bologna_Bilgi_Sistemi/public/yonetim/ders-tanimlari"> {!! Form::submit('İptal', ['size'=>'50x5']) !!}
	</td>
	</tr>

			<tr>

			</tr>

	{!! Form::close() !!}
</table>

<!--
@if($errors->any())
	<h4>{{$errors->first()}}
	<a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/DersTanimlari/ders-ekle"> Eklenen dersi gör </a> | 
	<a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/DersTanimlari/ders-ekle"> Yeni ders ekle </a>
	</h4>
@endif
--> 

<br />
<table border='0' width="70%">
	<tr>
		<th colspan="7" bgcolor="gold"> <center> {{$bolum->bolum_adi}} BÖLÜMÜ DERS LİSTESİ </center></th>
	</tr>
	<tr bgcolor="pink">
		<th> Ders Kodu </th>
		<th> Ders Adı </th>
		<th> Yarıyıl  </th>
		<th> Z/S </th>
		<th> <center> Kredi </center></th>
		<th> <center>T+U Saati </center></th>
		<th> <center>Düzenle </center> </th>
	</tr>
	<?php $i=0; ?>
	@foreach($dersler as $ders)
	@if($i%2 == 0)
	<tr bgcolor="white"> @else <tr> @endif 	<?php $i++ ?>
		<td> {{ $ders->ders_kodu }}	     </td>
		<td> {{ $ders->dersin_adi_tr }}     </td>
		<td> {{ $ders->dersin_yariyili }}. yarıyıl  </td>
		<td> {{ $ders->zorunluluk_durumu }} ({{ $ders->zorunluluk_durumu_en }}) </td>
		<td> <center> {{ $ders->dersin_kredisi }} </center> </td>
		<td> <center> {{ $ders->dersin_uygulama_saati }} + {{ $ders->dersin_lab_saati }}</center> </td>
		<td> <a href="/Bologna_Bilgi_Sistemi/public/yonetim/DersTanimlari/ders-duzenle/{{$ders->id}}"> <center><img src="{{ asset('photo/edit-icon.png') }}"></center> </a></td>
	</tr>
	@endforeach
</table>
@stop


</body>
</html>