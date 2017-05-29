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
<h5>@if(($dil) == 'tr')
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
	(<a href="/Bologna_Bilgi_Sistemi/public/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/detay/{{$kategori_link}}/{{$ders_detay_id}}">TR</a> /
	<a href="/Bologna_Bilgi_Sistemi/public/en/akademik-birimler/{{$dereceBilgisi}}/{{$bolumLink}}/detay/{{$kategori_link}}/{{$ders_detay_id}}">EN</a>)
</div>

</h5> 
<hr style="margin-bottom:15px;" /> 

 <!--  ################## DERS TABLOSUNDAN ÇEKİLENLER ##################  -->

@if(($dil)=='tr')
	<table border='1' width="100%">
		<tr>
			<th colspan="13" bgcolor="gold"> <center> {{$bolum}} Bölümü {{ $dersler->dersin_adi_tr }} Dersi Bilgileri </center></th>
		</tr>
		<tr bgcolor="pink">
			<tr><th> Dersin Adı </th><td> {{ $dersler->dersin_adi_tr }} </td></tr>
			<tr><th> Ön Koşul Dersleri</th><td> {{$dersler_detay->on_kosul_dersleri}} </td></tr>
			<tr><th> Önerilen Dersler </th><td> {{$dersler_detay->onerilen_dersler}}  </td></tr>
			<tr><th> Veriliş Biçimi  </th><td> {{$dersler_detay->dersin_verilis_bicimi}}  </td></tr>
			<tr><th> Dili </th><td> {{$dersler_detay->dersin_dili}} </td></tr>
			<tr><th> Seviyesi </th><td> {{$dersler_detay->dersin_seviyesi}} </td></tr>
			<tr><th> Türü </th><td> {{$dersler_detay->dersin_turu}} </td></tr>
			<tr><th> Staj </th><td> {{$dersler_detay->staj}} </td></tr>
			<tr><th> Koordinatörü </th><td> {{$dersler_detay->ders_koord}}</td></tr>
			<tr><th> Dersi Verenler </th><td> {{$dersler_detay->dersi_verenler}} </td></tr>
			<tr><th> Dersi Verenin Yard. </th><td> {{$dersler_detay->dersi_verenin_yard}} </td></tr>
			<tr><th> İçerik </th><td> {{$dersler_detay->ders_icerik}} </td></tr>
		</tr>
	</table>
@else
	<table border='1' width="100%">
		<tr>
			<th colspan="13" bgcolor="gold"> <center> {{$bolum}} Department {{ $dersler->dersin_adi_en }} Course Information </center></th>
		</tr>
		<tr bgcolor="pink">
			<tr><th> Course title </th><td> {{ $dersler->dersin_adi_en }} </td></tr>
			<tr><th> Prerequisites and Co-requisites </th><td> {{$dersler_detay->onkosul_dersleri_en}} </td></tr>
			<tr><th> Recommended Optional  </th><td> {{$dersler_detay->onerilen_dersler_en}}  </td></tr>
			<tr><th> Mode of Delivery  </th><td> {{$dersler_detay->dersin_verilis_bicimi_en}}  </td></tr>
			<tr><th> Language of Instruction </th><td> {{$dersler_detay->dersin_dili_en}} </td></tr>
			<tr><th> Level of Course Unit </th><td> {{$dersler_detay->dersin_seviyesi_en}} </td></tr>
			<tr><th> Course Type </th><td> {{$dersler_detay->dersin_turu_en}} </td></tr>
			<tr><th> Work Placement </th><td> {{$dersler_detay->staj_en}} </td></tr>
			<tr><th> Course Coordinator </th><td> {{$dersler_detay->ders_koord_en}}</td></tr>
			<tr><th> Instructors </th><td> {{$dersler_detay->dersi_verenler_en}} </td></tr>
			<tr><th> Assistants </th><td> {{$dersler_detay->dersi_verenin_yard_en}} </td></tr>
			<tr><th> Content </th><td> {{$dersler_detay->ders_icerik_en}} </td></tr>
		</tr>
	</table>
@endif
</div>
@stop