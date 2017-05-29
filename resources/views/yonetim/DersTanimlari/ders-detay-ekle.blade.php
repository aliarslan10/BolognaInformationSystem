@extends('yonetim/master_yonetim')

@section('page_header')
	Ders Detayı Ekle veya Düzenle : 
@stop

@section('sayfa_aciklamasi')
	 <h4>{{$derece}} > {{$birim_adi}} > {{ $bolum[0]['bolum_adi']}} > {{$dersler['dersin_adi_tr']}} </h4>
@stop

@section('icerik_yonetim')
	

<div class="sol">
	<table border='0' width="105%">
	{!! Form::open(['action'=>'DersDetayController@detayEkle']) !!}

	<tr>
	<th colspan="2"><center> Türkçe Açıklamalar </center></th>
	</tr>

	<tr>
	<td> Ön Koşul Dersleri	 </td>
	<td> {!! Form::text('on_kosul',$ders_detay[0]['on_kosul_dersleri'], ['size' => '50x4']) !!}  </td>
	</tr>

	<tr>
	<td>  Önerilen Dersleri   </td>
	<td>  {!! Form::text('onerilen_ders', $ders_detay[0]['onerilen_dersler'], ['size' => '50x4']) !!}  </td>
	</tr>

	<tr>
	<td> Dersin Veriliş Biçimi
	<td> {!! Form::text('ders_verilis_bicimi',$ders_detay[0]['dersin_verilis_bicimi'], ['size'=>'50x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> Dersin Dili </td>
	<td> {!! Form::text('ders_dili',$ders_detay[0]['dersin_dili'], ['size' => '50x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> Dersin Seviyesi </td>
	<td> {!! Form::text('ders_seviyesi', $ders_detay[0]['dersin_seviyesi'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> Dersin Türü </td>
	<td> {!! Form::text('ders_turu', $ders_detay[0]['dersin_turu'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> Staj </td>
	<td> {!! Form::text('staj', $ders_detay[0]['staj'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> Dersin Koordinatörü </td>
	<td> {!! Form::text('ders_koord', $ders_detay[0]['ders_koord'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> Dersi Verenler</td>
	<td> {!! Form::text('dersi_verenler', $ders_detay[0]['dersi_verenler'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> Dersi Verenin Yardımcıları </td>
	<td> {!! Form::text('dersi_verenin_yard', $ders_detay[0]['dersi_verenin_yard'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> Ders İçeriği  </td>
	<td> {!! Form::textarea('ders_icerik', $ders_detay[0]['ders_icerik'], ['size'=>'48x4']) !!} </td>  
	</tr>

	<tr>
	<td> Dersin Amacı  </td>
	<td> {!! Form::textarea('ders_amac', $ders_detay[0]['dersin_amaci'], ['size'=>'48x4']) !!} </td>  
	</tr>
	</table>
</div>


<div class="sag">
	<table border='0' width="70%">

	<tr>
	<th><center> İngilizce Açıklamalar </center></th>
	</tr>

	<tr>
	<td> {!! Form::text('on_kosul_en',$ders_detay[0]['onkosul_dersleri_en'], ['size' => '50x4']) !!}  </td>
	</tr>

	<tr>
	<td>  {!! Form::text('onerilen_ders_en', $ders_detay[0]['onerilen_dersler_en'], ['size' => '50x4']) !!}  </td>
	</tr>

	<tr>
	<td> {!! Form::text('ders_verilis_bicimi_en',$ders_detay[0]['dersin_verilis_bicimi_en'], ['size'=>'50x4']) !!} </td>  
	</tr>	
	<tr>
	<td> {!! Form::text('ders_dili_en',$ders_detay[0]['dersin_dili_en'], ['size' => '50x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> {!! Form::text('ders_seviyesi_en', $ders_detay[0]['dersin_seviyesi_en'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::text('ders_turu_en', $ders_detay[0]['dersin_turu_en'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::text('staj_en', $ders_detay[0]['staj_en'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::text('ders_koord_en', $ders_detay[0]['ders_koord_en'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::text('dersi_verenler_en', $ders_detay[0]['dersi_verenler_en'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::text('dersi_verenin_yard_en', $ders_detay[0]['dersi_verenin_yard_en'], ['size'=>'50x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('ders_icerik_en', $ders_detay[0]['ders_icerik_en'], ['size'=>'48x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('ders_amac_en', $ders_detay[0]['dersin_amaci_en'], ['size'=>'48x4']) !!} </td>  
	</tr>
	</table>
</div> 


<input type='hidden' name='ders_id' value='{{ $dersler['id'] }}'/>

<center> {!! Form::submit('Bilgileri Sisteme Ekle') !!} 

{!! Form::close() !!}

<a href="/Bologna_Bilgi_Sistemi/public/yonetim/DersTanimlari/ders-detay/{{ $bolum[0]['id'] }}" > {!! Form::submit('Geri Dön') !!}  </a>
</center>

@stop


</body>
</html>