@extends('yonetim/master_yonetim')

@section('page_header')
	İçerik Bologna Tanımları
@stop

@section('sayfa_aciklamasi')
	Bölümlerle ile ilgili Bologna bilgilerinin girileceği kısımdır. 
@stop

@section('icerik_yonetim')


<div class="sol">
	<table border='0' width="100%">
	{!! Form::open(['route' => 'bilgiekle']) !!}

	<tr>
	<td colspan="2"><center> Türkçe Açıklamalar </center></td>
	</tr>

	<tr>
	<td> Programın Amacı	 </td>
	<td> {!! Form::textarea('amac', $icerikler[0]['amac'], ['size' => '65x4']) !!}  </td>
	</tr>

	<tr>
	<td>  Kazanılan Derece 	   </td>
	<td>  {!! Form::text('kazanilan_derece', $icerikler[0]['kazanilan_derece'], ['size' => '68x4']) !!}  </td>
	</tr>

	<tr>
	<td> Derece Seviyesi
	<td> {!! Form::select('derece_seviyesi',
						   array('Doktora'=>'Doktora', 'Yüksek Lisans'=>'Yüksek Lisans', 'Lisans'=>'Lisans', 'Ön Lisans' => 'Ön Lisans')) !!}
	</td>
	</tr>

	<tr>
	<td> Kabul Şartları
	<td> {!! Form::textarea('kabul_sartlari',$icerikler[0]['kabul_sartlari'], ['size'=>'65x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> Önceki Öğrenmenin Tanınması </td>
	<td> {!! Form::textarea('onceki_ogrenmenin_taninmasi',$icerikler[0]['onceki_ogrenmenin_taninmasi'], ['size' => '65x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> Yeterlilik Koşulları ve Kuralları </td>
	<td> {!! Form::textarea('yeterlilik_kosullari', $icerikler[0]['yeterlilik_kosullari'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Program Profili </td>
	<td> {!! Form::textarea('program_profili', $icerikler[0]['program_profili'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Program Yeterlilikleri ve TYYÇ Matrisi</td>
	<td> {!! Form::textarea('program_yeterlilik_ve_tycc', $icerikler[0]['program_yeterlilik_ve_tycc'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> İstihdam Olanakları </td>
	<td> {!! Form::textarea('istihdam_olanaklari', $icerikler[0]['istihdam_olanaklari'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Üst Derece Programlarına Geçiş </td>
	<td> {!! Form::textarea('ust_derece_programlara_gecis', $icerikler[0]['ust_derece_programlara_gecis'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<!-- BU KISIM DERS EKLEME KISMINDAN DOLDURULUYOR
	<tr>
	<td> Dersler ve AKTS Kredileri </td>
	<td> {!! Form::textarea('assdsd', '', ['size'=>'65x4']) !!} </td>  
	</tr>   -->


	<tr>
	<td> Ders Kategori Listesi </td>
	<td> {!! Form::textarea('ders_kategori_listesi', $icerikler[0]['ders_kategori_listesi'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Ders ve Program Yeterlilikleri Matrisi  </td>
	<td> {!! Form::textarea('ders_ve_program_yeterlilik_matrisi', $icerikler[0]['ders_ve_program_yeterlilik_matrisi'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Ölçme ve Değerlendirme </td>
	<td> {!! Form::textarea('olcme_degerlendirme', $icerikler[0]['olcme_degerlendirme'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Mezuniyet Koşulları </td>
	<td> {!! Form::textarea('mezuniyet_kosullari', $icerikler[0]['mezuniyet_kosullari'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Eğitim Şekli </td>
	<td> {!! Form::textarea('egitim_sekli', $icerikler[0]['egitim_sekli'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td>  Bölüm Başkanı ve AKTS Koord. </td>
	<td> {!! Form::textarea('bolum_bsk_ve_akts_koord',$icerikler[0]['bolum_bsk_ve_akts_koord'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> Değerlendirme Anketleri </td>
	<td> {!! Form::textarea('degerlendirme_anketleri', $icerikler[0]['degerlendirme_anketleri'], ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> İletişim Bilgileri </td>
	<td> {!! Form::textarea('iletisim_bilgileri', $icerikler[0]['iletisim_bilgileri'], ['size'=>'65x4']) !!} </td>  
	</tr>
	</table>
</div>


<div class="sag">
<table width="100%">
	<tr>
	<td><center> İngilizce Açıklamalar </center></td>
	</tr>

	<tr>
	<td> {!! Form::textarea('amac_en',null, ['size' => '65x4']) !!}  </td>
	</tr>

	<tr>
	<td>  {!! Form::text('kazanilan_derece_en', null, ['size' => '68x4']) !!}  </td>
	</tr>

	<tr>
	<td> {!! Form::select('derece_seviyesi_en',
						   array('Doctorate'=>'Doctorate', 'Master'=>'Master', 'License'=>'License', 'Associate Degree' => 'Associate Degree')) !!}
	</td>
	</tr>

	<tr>
	<td> {!! Form::textarea('kabul_sartlari_en','', ['size'=>'65x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> {!! Form::textarea('onceki_ogrenmenin_taninmasi_en','', ['size' => '65x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> {!! Form::textarea('yeterlilik_kosullari_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('program_profili_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('program_yeterlilik_ve_tycc_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('istihdam_olanaklari_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('ust_derece_programlara_gecis_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<!-- BU KISIM DERS EKLEME KISMINDAN DOLDURULUYOR
	<tr>
	<td> Dersler ve AKTS Kredileri </td>
	<td> {!! Form::textarea('assdsd', '', ['size'=>'65x4']) !!} </td>  
	</tr>   -->


	<tr>
	<td> {!! Form::textarea('ders_kategori_listesi_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('ders_ve_program_yeterlilik_matrisi_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('olcme_degerlendirme_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>
	
	<tr>
	<td> {!! Form::textarea('mezuniyet_kosullari_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('egitim_sekli_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('bolum_bsk_ve_akts_koord_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('degerlendirme_anketleri_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>

	<tr>
	<td> {!! Form::textarea('iletisim_bilgileri_en', '', ['size'=>'65x4']) !!} </td>  
	</tr>
	</table>
</div> 


<input type='hidden' name='bolum_id' value='{{ $bolum_id }}'/>
<center> {!! Form::submit('Bilgileri Sisteme Ekle') !!} 

{!! Form::close() !!}

<a href="/Bologna_Bilgi_Sistemi/public/yonetim/icerik-tanimlari"> {!! Form::submit('İşlemi İptal Et') !!}  </a>
</center>

@if($errors->any())
	<h4>{{$errors->first()}} --
	</h4>
@endif

@stop