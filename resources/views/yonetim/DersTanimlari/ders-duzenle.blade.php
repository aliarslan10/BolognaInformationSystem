@extends('yonetim/master_yonetim')

@section('page_header')
	Ders Bologna Tanımları
@stop

@section('sayfa_aciklamasi')
	- Ders bilgilerini düzenleme sayfası
@stop
	
@section('icerik_yonetim')
<table border='0' width="40%">
	{!! Form::open(['route' => 'dersduzenle']) !!}

	<tr>
	<td> Dersin Türkçe Adı 		 </td>
	<td> <input type="text" name="dersin_adi_tr" value="{{$ders->dersin_adi_tr}}" size="30" />  </td>
	</tr>

	<tr>
	<td>  Dersin İngilizce Adı 	   </td>
	<td>   <input type="text" name="dersin_adi_en" value="{{$ders->dersin_adi_en}}" size="30" />   </td>
	</tr>


	<tr>
	<td> Yarı yıl </td>
	<td> <input type="text" name="dersin_yariyili" value="{{$ders->dersin_yariyili}}" maxlength="1" size="30" /></td>
	</tr>

	<tr>
	<td> Ortalama Durumu </td>
	<td> {!! Form::select('ortalama_durumu', array('0'=>'Seçiniz', '1'=>'Girer', '2'=>'Girmez', '3'=>'Notlu Girer')) !!}
	</tr>

	<?php 
		$zorunlu="null"; $secmeli="null"; 
		if($ders->zorunluluk_durumu == "Zorunlu")
			$zorunlu = "checked";
		else
			$secmeli = "checked";
	?>

	<tr>
	<td> Zorunluluk Durumu (TR) </td>
	<td> 
		<input type="radio" name="zorunluluk_durumu" value="Zorunlu" {{$zorunlu}} /> Zorunlu   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="zorunluluk_durumu" value="Seçmeli" {{$secmeli}} /> Seçmeli
	</td>
	</tr>

	<tr>
	<td> Zorunluluk Durumu (EN) </td>
	<td> 
		<input type="radio" name="zorunluluk_durumu_en" value="Compulsory" {{$zorunlu}} /> Compulsory  &nbsp;
		<input type="radio" name="zorunluluk_durumu_en" value="Elective" {{$secmeli}} /> Elective
	</td>
	</tr>
	
	<tr>
	<td> Dersin Saati </td>
	<td>   <input type="text" name="dersin_saati" value="{{$ders->dersin_saati}}" size="30" />   </td>
	</tr>
	
	<tr>
	<td> Dersin Uygulama Saati </td>
	<td>   <input type="text" name="dersin_uygulama_saati" value="{{$ders->dersin_uygulama_saati}}" size="30" />   </td>
	</tr>
	
	<tr>
	<td> Dersin Lab. Saati </td>
	<td>   <input type="text" name="dersin_lab_saati" value="{{$ders->dersin_lab_saati}}" size="30" />   </td>
	</tr>
		
	<tr>
	<td> Dersin Kredisi </td>
	<td>   <input type="text" name="dersin_kredisi" value="{{$ders->dersin_kredisi}}" size="30" />   </td>
	</tr>
	
	<tr>
	<td> Bölüm Kodu </td>
	<td>   <input type="text" name="bolum_kodu" value="{{$ders->bolum_kodu}}" size="30" />   </td>
	</tr>
	
	<tr>
	<td> Dersin Kodu </td>
	<td>   <input type="text" name="ders_kodu" value="{{$ders->ders_kodu}}" size="30" />   </td>
	</tr>

	<tr>
	<td> <input type="hidden" name="id" value="{{$ders->id}}"/> </td>
	<td> {!! Form::submit('Dersi Güncelle') !!} </td>
	</tr>

	{!! Form::close() !!}
</table>

@if($errors->any())
<h4>{{$errors->first()}}
	<a href="/Bologna_Bilgi_Sistemi/public/yonetim/DersTanimlari/ders-ekle/{{$ders->bolum_id}}"> Önceki sayfaya dön </a>
</h4>
@endif
@stop

</body>
</html>