@extends('master')

@section('content')
<div class="program-bilgileri-icerik-menusu">

	@if(($dil)=='en')
	<h4> Program Information </h4> <hr />
	<ul>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/amac/{{$bolum_id}}"> Objectives </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/kazanilan-derece/{{$bolum_id}}"> Qualification Awarded </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/derece-seviyesi/{{$bolum_id}}"> Level of Qualification </a></li> 
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/kabul-sartlari/{{$bolum_id}}"> Specific Admission Requirements </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/onceki-ogrenmenin-taninmasi/{{$bolum_id}}"> Recognition of Prior Learning  </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/yeterlilik-kosullari/{{$bolum_id}}"> Qualification Requirements and Regulations	</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/program-profili/{{$bolum_id}}"> Profile of the Programme </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/program-yeterlilikleri-ve-tycc-matrisi/{{$bolum_id}}"> Key Learning Outcomes and NQF Matrix </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/istihdam-olanaklari/{{$bolum_id}}"> Occupational Profiles of Graduates </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/ust-derece-programlarina-gecis/{{$bolum_id}}"> Access to Further Studies </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/dersler-ve-akts-kredileri/{{$bolum_id}}"> Course Structure Diagrams with Credits </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/ders-kategori-listesi/{{$bolum_id}}"> Course Categories </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/ders-ve-program-yeterlilikleri-matrisi/{{$bolum_id}}"> Course and Program Outcomes Matrix	</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/olcme-ve-degerlendirme/{{$bolum_id}}"> Examination, Regulations, Assessment and Grading </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/mezuniyet-kosullari/{{$bolum_id}}"> Graduation Requirements </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/egitim-sekli/{{$bolum_id}}"> Mode of Study </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/bolum-baskanligi-ve-akts-koordinatorlugu/{{$bolum_id}}"> Programme Director and ECTS Coord. </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/degerlendirme-anketleri/{{$bolum_id}}"> Evaluation Questionnaires </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/iletisim-bilgileri/{{$bolum_id}}"> Contact Information </a></li>
	</ul>

	@else
	<h4> Program Bilgileri </h4> <hr>
		<ul>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/amac/{{$bolum_id}}"> Amaç </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/kazanilan-derece/{{$bolum_id}}"> Kazanılan Derece </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/derece-seviyesi/{{$bolum_id}}"> Derece Seviyesi </a></li> 
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/kabul-sartlari/{{$bolum_id}}"> Kabul ve Kayıt Şartları </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/onceki-ogrenmenin-taninmasi/{{$bolum_id}}"> Önceki Öğrenmenin Tanınması  </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/yeterlilik-kosullari/{{$bolum_id}}"> Yeterlilik Koşulları ve Kuralları 				</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/program-profili/{{$bolum_id}}"> Program Profili									</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/program-yeterlilikleri-ve-tycc-matrisi/{{$bolum_id}}"> Program Yeterlilikleri ve TYYÇ Matrisi</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/istihdam-olanaklari/{{$bolum_id}}"> İstihdam Olanakları 								</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/ust-derece-programlarina-gecis/{{$bolum_id}}"> Üst Derece Programlarına Geçiş </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/dersler-ve-akts-kredileri/{{$bolum_id}}"> Dersler ve AKTS Kredileri</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/ders-kategori-listesi/{{$bolum_id}}"> Ders Kategori Listesi </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/ders-ve-program-yeterlilikleri-matrisi/{{$bolum_id}}"> Ders ve Program Yeterlilikleri Matrisi 			</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/olcme-ve-degerlendirme/{{$bolum_id}}"> Ölçme ve Değerlendirme 							</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/mezuniyet-kosullari/{{$bolum_id}}"> Mezuniyet Koşulları 								</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/egitim-sekli/{{$bolum_id}}"> Eğitim Şekli </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/bolum-baskanligi-ve-akts-koordinatorlugu/{{$bolum_id}}"> Bölüm Bşk. ve AKTS Koord. </a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/degerlendirme-anketleri/{{$bolum_id}}"> Değerlendirme Anketleri 							</a></li>
		<li> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/iletisim-bilgileri/{{$bolum_id}}"> İletişim Bilgileri 								</a></li>
	</ul>
	@endif 
</div>


<!--  ################## BÖLÜM BİLGİSİ YOLU ##################  -->
<div class="program-bilgileri-icerik"> 
<h5>
@if(($dil) == 'tr')
	<b> <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}"> {{ $derece_adi }}  </a>
	>   <a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/lisans/insaat-muhendisligi/amac/{{$bolum_id}}"> {{ $bolum }} </a>
	> {{ $kategori  }}
	</b> 
@else
	<b> <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}"> {{ $derece_adi }}  </a>
	>   <a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/lisans/insaat-muhendisligi/amac/{{$bolum_id}}"> {{ $bolum }} </a>
	> {{ $kategori  }}
	</b> 
@endif


<div style="text-align: right; float:right;">
	(<a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/{{$kategori_link}}/{{$bolum_id}}">TR</a> /
	<a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/{{$kategori_link}}/{{$bolum_id}}">EN</a>)
</div>

</h5> 
<hr style="margin-bottom:12px" /> 

<!--  ################## BÖLÜMÜN BİLGİLER TABLOSUNDAN ÇEKİLENLER ##################  -->
 	
@if(($amac) != null)
 	{{ $amac }}
@endif

@if(($kazanilan_derece) != null)
 	{{ $kazanilan_derece }}
@endif

@if(($derece_seviyesi) != null)
 	{{ $derece_seviyesi }}
@endif

@if(($kabul_sartlari) != null)
 	{{ $kabul_sartlari }}
@endif

@if(($onceki_ogrenmenin_taninmasi) != null)
 	{{ $onceki_ogrenmenin_taninmasi }}
@endif

@if(($yeterlilik_kosullari) != null)
 	{{ $yeterlilik_kosullari }}
@endif

@if(($mezuniyet_kosullari) != null)
 	{{ $mezuniyet_kosullari }}
@endif

@if(($iletisim_bilgileri) != null)
 	{{ $iletisim_bilgileri }}
@endif

@if(($program_profili) != null)
 	{{ $program_profili }}
@endif

@if(($program_yeterlilik_ve_tycc_matrisi) != null)
 	{{ $program_yeterlilik_ve_tycc_matrisi }}
@endif

@if(($istihdam_olanaklari) != null)
 	{{ $istihdam_olanaklari }}
@endif

@if(($ust_derece_programlara_gecis) != null)
 	{{ $ust_derece_programlara_gecis }}
@endif

@if(($ders_kategori_listesi) != null)
 	{{ $ders_kategori_listesi }}
@endif

@if(($ders_ve_program_yeterlilik_matrisi) != null)
 	{{ $ders_ve_program_yeterlilik_matrisi }}
@endif

@if(($olcme_degerlendirme) != null)
 	{{ $olcme_degerlendirme }}
@endif

@if(($bolum_bsk_ve_akts_koord) != null)
 	{{ $bolum_bsk_ve_akts_koord }}
@endif

@if(($degerlendirme_anketleri) != null)
 	{{ $degerlendirme_anketleri }}
@endif

@if(($egitim_sekli) != null)
 	{{ $egitim_sekli }}
@endif

 <!--  ################## DERS TABLOSUNDAN ÇEKİLENLER ##################  -->
 @if(($dersler_ve_akts) != null)
 	<table border='0' width="100%">
	<tr>
		<th colspan="7" bgcolor="#CF1F46"> <center><font color="white"> {{$bolum}} @if(($dil)=='en')  Course List @else Ders Listesi @endif</font></center></th>
	</tr>
	<tr bgcolor="#87ceeb">
		<th> @if(($dil)=='en') Course Unit Code  @else Ders Kodu @endif</th>
		<th> @if(($dil)=='en') Course Unit Title @else Ders Adı @endif</th>
		<th> @if(($dil)=='en') Semester Course List @else Yarıyıl  @endif</th>
		<th> @if(($dil)=='en') Compulsory/Elective   @else Z/S @endif </th>
		<th> <center> @if(($dil)=='en') L+P Hour  @else Kredi @endif </center></th>
		<th> <center> @if(($dil)=='en') Credits  @else T+U Saati @endif </center></th>
	</tr>
	<?php $i=0; ?>
	@foreach($dersler_ve_akts as $ders)
	@if($i%2 == 0)
	<tr> @else <tr bgcolor="#cccccc"> @endif <?php $i++ ?>
		<td> {{ $ders->ders_kodu }}	     </td>

		@foreach($ders_detay as $detay)
			@if($detay->dersler_id == $ders->id)
			<td> 
				@if(($dil)=='en')
					<a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/detay/{{sef_link($ders->dersin_adi_en)}}/{{$detay->id}}"> {{ $ders->dersin_adi_en }}  </a>
			
				@else
					<a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/detay/{{sef_link($ders->dersin_adi_en)}}/{{$detay->id}}"> {{ $ders->dersin_adi_tr }}  </a>
				
				@endif
			</td>
			
			<td> @if(($dil)=='en') {{ $ders->dersin_yariyili }}. semester @else {{ $ders->dersin_yariyili }}. yarıyıl @endif  </td>
			<td> @if(($dil)=='en') {{ $ders->zorunluluk_durumu_en }} @else {{ $ders->zorunluluk_durumu }}  @endif</td>
			<td> <center> {{ $ders->dersin_kredisi }} </center> </td>
			<td> <center> {{ $ders->dersin_uygulama_saati }} + {{ $ders->dersin_lab_saati }}</center> </td>
			@endif
		@endforeach
	</tr>
	@endforeach
	</table>
@endif
</div>


<?php
    function sef_link($string)
    {
        $turkce=array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
        $duzgun=array("s", "s", "i", "u", "u", "o", "o", "c", "c", "s", "s", "i", "g", "g", "i", "o", "o", "c", "c", "u", "u");
        $string = str_replace($turkce, $duzgun, $string);
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
      }	
?>

@stop