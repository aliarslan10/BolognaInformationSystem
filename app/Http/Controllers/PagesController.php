<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Dereceler;
use App\Birimler;
use App\Bolumler;
use App\Dersler;
use App\Bilgiler;
use App\DersDetay;

class PagesController extends Controller
{
    public function anasayfa(){
    	return view('master');
    }

    public function deneme()
    {
    	$dataBirimler  = Birimler::all();
    	$dataBolumler  = Bolumler::all();

    	//return view('deneme_vt',['datax'=>$veritabaniVerisi]);

    	return view('deneme_vt')->with('birimler', $dataBirimler)
    					 		->with('bolumler', $dataBolumler);

    }

    public function goruntule($getDerece)
    {
        $en = 0;

        $getDereceBaslik = getDereceBilgisi($getDerece); //where içerisinde kullanılıyor. doktora != Doktora

        //join ile birim ve bölümler tablosunun birleştirilmesi ile birimlerin altındaki bölümlere ulaşıldı (var olanların)
        $bolumler = Birimler::join('bolumler','birimler.id', '=', 'bolumler.birim_id')->select('bolumler.bolum_adi', 'bolumler.birim_id', 'bolumler.durum', 'bolumler.id','bolumler.bolum_adi_link')->where('birimler.derece',$getDereceBaslik)->get();

        //Herbirimin bir alt bölümü olmayabilir...
        $birimler = Birimler::select('id','birim_adi', 'derece')->where('derece',$getDereceBaslik)->orderby('id')->get();

        return view('akademik-birimler')->with('bolumler', $bolumler)
                                        ->with('birimler', $birimler)
                                        ->with('ingilizce', $en)
                                        ->with('dereceBilgisiLink', $getDerece);
    }



    public function goruntule_en($getDerece)
    {
        $en = 1;

        

        $getDereceBaslik = getDereceBilgisi($getDerece); //sorguda kullanmak için

        //join ile birim ve bölümler tablosunun birleştirilmesi ile birimlerin altındaki bölümlere ulaşıldı (var olanların)
        $bolumler = Birimler::join('bolumler','birimler.id', '=', 'bolumler.birim_id')->select('bolumler.bolum_adi_en', 'bolumler.birim_id', 'bolumler.durum', 'bolumler.id','bolumler.bolum_adi_link')->where('birimler.derece',$getDereceBaslik)->get();
     
        $birimler = Birimler::select('id','birim_adi_en','derece_adi_en')->where('derece',$getDereceBaslik)->orderby('id')->get();


        return view('akademik-birimler')->with('bolumler', $bolumler)
                                        ->with('birimler', $birimler)
                                        ->with('ingilizce', $en)
                                        ->with('dereceBilgisiLink', $getDerece);
    }


    public function programBilgileri($dereceBilgisi=null, $program=null, $kategori=null, $bolum_id=null){

        //parametredeki program ifadesi sırf linkte görünsün diye var. etkisiz eleman. sondaki id değişince sayfa içeriği değişiyor.

        /*sadece bir if'e girilip, diğerlerine girilmediği için, diğer if'lerin içindeki değişkendeler "Undefined variable"
        hatası vermesinler diye... */
        $amac = "";
        $kazanilan_derece = "";
        $derece_seviyesi = "";
        $kabul_sartlari = "";
        $onceki_ogrenmenin_taninmasi = "";
        $yeterlilik_kosullari = "";
        $mezuniyet_kosullari= "";
        $iletisim_bilgileri = "";
        $dersler_ve_akts = "";
        $program_profili = "";
        $program_yeterlilik_ve_tycc_matrisi = "";
        $istihdam_olanaklari = "";
        $ust_derece_programlara_gecis = "";
        $ders_kategori_listesi = "";
        $ders_ve_program_yeterlilik_matrisi = "";
        $olcme_degerlendirme = "";
        $egitim_sekli = "";
        $bolum_bsk_ve_akts_koord = "";
        $degerlendirme_anketleri = "";
        $ders_detay = "";
        $kategori_link = $kategori;


        if($kategori == "amac"){
            $amac = Bilgiler::where('bolum_id',$bolum_id)->pluck("amac");
            $kategori = "Amaç"; //icerik yolunda gözükecek ifade
        }


        else if($kategori == "kazanilan-derece"){
            $kazanilan_derece = Bilgiler::where('bolum_id',$bolum_id)->pluck("kazanilan_derece");
            $kategori = "Kazanılan Derece";
        }

        else if($kategori == "derece-seviyesi"){
            $derece_seviyesi = Bilgiler::where('bolum_id',$bolum_id)->pluck("derece_seviyesi");
            $kategori = "Derece Seviyesi";
        }

        else if($kategori == "kabul-sartlari"){
            $kabul_sartlari = Bilgiler::where('bolum_id',$bolum_id)->pluck("kabul_sartlari");
            $kategori = "Kabul Şartları";
        }

        else if($kategori == "onceki-ogrenmenin-taninmasi"){
            $onceki_ogrenmenin_taninmasi = Bilgiler::where('bolum_id',$bolum_id)->pluck("onceki_ogrenmenin_taninmasi");
            $kategori = "Önceki Öğrenmenin Tanınması";
        }

        else if($kategori == "yeterlilik-kosullari"){
            $yeterlilik_kosullari = Bilgiler::where('bolum_id',$bolum_id)->pluck("yeterlilik_kosullari");
            $kategori = "Yeterlilik Koşulları";
        }


        else if($kategori == "program-profili"){
            $program_profili = Bilgiler::where('bolum_id',$bolum_id)->pluck("program_profili");
            $kategori = "Program Profili";
        }


        else if($kategori == "program-yeterlilikleri-ve-tycc-matrisi"){
            $program_yeterlilik_ve_tycc_matrisi = Bilgiler::where('bolum_id',$bolum_id)->pluck("program_yeterlilik_ve_tycc_matrisi");
            $kategori = "Program Yeterlilikleri ve TYYÇ Matrisi";
        }


        else if($kategori == "istihdam-olanaklari"){
            $istihdam_olanaklari = Bilgiler::where('bolum_id',$bolum_id)->pluck("istihdam_olanaklari");
            $kategori = "İstihdam Olanakları ";
        }

        else if($kategori == "ust-derece-programlarina-gecis"){
            $ust_derece_programlara_gecis = Bilgiler::where('bolum_id',$bolum_id)->pluck("ust_derece_programlara_gecis");
            $kategori = "Üst Derece Programlarına Geçiş  ";
        }


        else if($kategori == "dersler-ve-akts-kredileri")
        {
            $dersler_ve_akts = Dersler::where('bolum_id',$bolum_id)->get();
            $kategori = "Dersler ve AKTS Kredileri";

            $ders_detay = DersDetay::all();
        }


        else if($kategori == "ders-kategori-listesi")
        {
            $ders_kategori_listesi = Bilgiler::where('bolum_id',$bolum_id)->pluck("ders_kategori_listesi");
            $kategori = "Ders Kategori Listesi";
        }

        else if($kategori == "ders-ve-program-yeterlilikleri-matrisi")
        {
            $ders_ve_program_yeterlilik_matrisi = Bilgiler::where('bolum_id',$bolum_id)->pluck("ders_ve_program_yeterlilik_matrisi");
            $kategori = "Ders ve Program Yeterlilikleri Matrisi";
        }

        else if($kategori == "olcme-ve-degerlendirme")
        {
            $olcme_degerlendirme = Bilgiler::where('bolum_id',$bolum_id)->pluck("olcme_degerlendirme");
            $kategori = "Ölçme ve Değerlendirme";
        }


        else if($kategori == "mezuniyet-kosullari"){
            $mezuniyet_kosullari = Bilgiler::where('bolum_id',$bolum_id)->pluck("mezuniyet_kosullari");
            $kategori = "Mezuniyet Koşulları";
        }


        else if($kategori == "egitim-sekli"){
            $egitim_sekli = Bilgiler::where('bolum_id',$bolum_id)->pluck("egitim_sekli");
            $kategori = "Eğitim Şekli";
        }


        else if($kategori == "bolum-baskanligi-ve-akts-koordinatorlugu")
        {
            $bolum_bsk_ve_akts_koord = Bilgiler::where('bolum_id',$bolum_id)->pluck("bolum_bsk_ve_akts_koord");
            $kategori = "Bölüm Başkanı ve AKTS Koordinatörlüğü ";
        }

        else if($kategori == "degerlendirme-anketleri")
        {
            $degerlendirme_anketleri = Bilgiler::where('bolum_id',$bolum_id)->pluck("degerlendirme_anketleri");
            $kategori = "Değerlendirme Anketleri ";
        }

        else if($kategori == "iletisim-bilgileri")
        {
            $iletisim_bilgileri = Bilgiler::where('bolum_id',$bolum_id)->pluck("iletisim_bilgileri");
            $kategori = "İletişim Bilgileri";
        }

        else
        {
            return view("errors.404");
        }

       $bolum = Bolumler::select('bolum_adi','bolum_adi_link', 'birim_id')->where('id',$bolum_id)->get(); //ör: bilgisayar-muhendisligi

       $program   = $bolum[0]['bolum_adi'];
       $bolumLink = $bolum[0]['bolum_adi_link'];
       $birim_id  = $bolum[0]['birim_id'];

        $derece_id = Birimler::select('derece_id')->where('id',$birim_id)->get();
        $derece_id = $derece_id[0]["derece_id"];

        //dd($derece_id);

        // Birimler modeli içerisinde yazılan derece fonksiyonu aracılığıyla birimin adı çağrıldı.
        $nesne = new Birimler();
        $derece_adi = $nesne->derece($derece_id);


        return view('program-bilgileri')->with('bolum',$program)
                                        ->with('bolumLink',$bolumLink)
                                        ->with('bolum_id',$bolum_id)
                                        ->with('amac',$amac)
                                        ->with('kazanilan_derece',$kazanilan_derece)
                                        ->with('derece_seviyesi', $derece_seviyesi)
                                        ->with('kabul_sartlari', $kabul_sartlari)
                                        ->with('onceki_ogrenmenin_taninmasi', $onceki_ogrenmenin_taninmasi)
                                        ->with('yeterlilik_kosullari', $yeterlilik_kosullari)
                                        ->with('program_profili', $program_profili)
                                        ->with('program_yeterlilik_ve_tycc_matrisi', $program_yeterlilik_ve_tycc_matrisi)
                                        ->with('istihdam_olanaklari', $istihdam_olanaklari)
                                        ->with('ust_derece_programlara_gecis', $ust_derece_programlara_gecis)                                   
                                        ->with('dersler_ve_akts',$dersler_ve_akts)
                                        ->with('ders_detay', $ders_detay)
                                        ->with('ders_kategori_listesi', $ders_kategori_listesi)
                                        ->with('ders_ve_program_yeterlilik_matrisi', $ders_ve_program_yeterlilik_matrisi)
                                        ->with('olcme_degerlendirme', $olcme_degerlendirme)
                                        ->with('mezuniyet_kosullari', $mezuniyet_kosullari)
                                        ->with('egitim_sekli', $egitim_sekli)
                                        ->with('bolum_bsk_ve_akts_koord', $bolum_bsk_ve_akts_koord)
                                        ->with('degerlendirme_anketleri', $degerlendirme_anketleri)
                                        ->with('dereceBilgisi',$dereceBilgisi)
                                        ->with('kabul_sartlari',$kabul_sartlari)
                                        ->with('iletisim_bilgileri',$iletisim_bilgileri)
                                        ->with('dil','tr')
                                        ->with('derece_adi',$derece_adi)
                                        ->with('kategori', $kategori)
                                        ->with('kategori_link',$kategori_link);
    }


        public function programBilgileri_en($dereceBilgisi=null, $program=null, $kategori=null, $bolum_id=null){

        //parametredeki program ifadesi sırf linkte görünsün diye var. etkisiz eleman. sondaki id değişince sayfa içeriği değişiyor.

        /*sadece bir if'e girilip, diğerlerine girilmediği için, diğer if'lerin içindeki değişkendeler "Undefined variable"
        hatası vermesinler diye... */
        $amac = "";
        $kazanilan_derece = "";
        $derece_seviyesi = "";
        $kabul_sartlari = "";
        $onceki_ogrenmenin_taninmasi = "";
        $yeterlilik_kosullari = "";
        $mezuniyet_kosullari= "";
        $iletisim_bilgileri = "";
        $dersler_ve_akts = "";
        $program_profili = "";
        $program_yeterlilik_ve_tycc_matrisi = "";
        $istihdam_olanaklari = "";
        $ust_derece_programlara_gecis = "";
        $ders_kategori_listesi = "";
        $ders_ve_program_yeterlilik_matrisi = "";
        $olcme_degerlendirme = "";
        $egitim_sekli = "";
        $bolum_bsk_ve_akts_koord = "";
        $degerlendirme_anketleri = "";
        $ders_detay = "";
        $kategori_link = $kategori;


        if($kategori == "amac"){
            $amac = Bilgiler::where('bolum_id',$bolum_id)->pluck("amac_en");
            $kategori = "Objectives"; //icerik yolunda gözükecek ifade
        }


        else if($kategori == "kazanilan-derece"){
            $kazanilan_derece = Bilgiler::where('bolum_id',$bolum_id)->pluck("kazanilan_derece_en");
            $kategori = "Qualification Awarded";
        }

        else if($kategori == "derece-seviyesi"){
            $derece_seviyesi = Bilgiler::where('bolum_id',$bolum_id)->pluck("derece_seviyesi_en");
            $kategori = "Level of Qualification";
        }

        else if($kategori == "kabul-sartlari"){
            $kabul_sartlari = Bilgiler::where('bolum_id',$bolum_id)->pluck("kabul_sartlari_en");
            $kategori = "Specific Admission Requirements";
        }

        else if($kategori == "onceki-ogrenmenin-taninmasi"){
            $onceki_ogrenmenin_taninmasi = Bilgiler::where('bolum_id',$bolum_id)->pluck("onceki_ogrenmenin_taninmasi_en");
            $kategori = "Recognition of Prior Learning";
        }

        else if($kategori == "yeterlilik-kosullari"){
            $yeterlilik_kosullari = Bilgiler::where('bolum_id',$bolum_id)->pluck("yeterlilik_kosullari_en");
            $kategori = "Qualification Requirements and Regulations";
        }


        else if($kategori == "program-profili"){
            $program_profili = Bilgiler::where('bolum_id',$bolum_id)->pluck("program_profili_en");
            $kategori = "Profile of the Programme";
        }


        else if($kategori == "program-yeterlilikleri-ve-tycc-matrisi"){
            $program_yeterlilik_ve_tycc_matrisi = Bilgiler::where('bolum_id',$bolum_id)->pluck("program_yeterlilik_ve_tycc_matrisi_en");
            $kategori = "Key Learning Outcomes and NQF Matrix";
        }


        else if($kategori == "istihdam-olanaklari"){
            $istihdam_olanaklari = Bilgiler::where('bolum_id',$bolum_id)->pluck("istihdam_olanaklari_en");
            $kategori = "Occupational Profiles of Graduates";
        }

        else if($kategori == "ust-derece-programlarina-gecis"){
            $ust_derece_programlara_gecis = Bilgiler::where('bolum_id',$bolum_id)->pluck("ust_derece_programlara_gecis_en");
            $kategori = "Access to Further Studies ";
        }


        else if($kategori == "dersler-ve-akts-kredileri")
        {
            $dersler_ve_akts = Dersler::where('bolum_id',$bolum_id)->get();
            $kategori = "Course Structure Diagrams with Credits";

            $ders_detay = DersDetay::all();
        }


        else if($kategori == "ders-kategori-listesi")
        {
            $ders_kategori_listesi = Bilgiler::where('bolum_id',$bolum_id)->pluck("ders_kategori_listesi_en");
            $kategori = "Course Categories";
        }

        else if($kategori == "ders-ve-program-yeterlilikleri-matrisi")
        {
            $ders_ve_program_yeterlilik_matrisi = Bilgiler::where('bolum_id',$bolum_id)->pluck("ders_ve_program_yeterlilik_matrisi_en");
            $kategori = "Course and Program Outcomes Matrix";
        }

        else if($kategori == "olcme-ve-degerlendirme")
        {
            $olcme_degerlendirme = Bilgiler::where('bolum_id',$bolum_id)->pluck("olcme_degerlendirme_en");
            $kategori = "Examination, Regulations, Assessment and Grading";
        }


        else if($kategori == "mezuniyet-kosullari"){
            $mezuniyet_kosullari = Bilgiler::where('bolum_id',$bolum_id)->pluck("mezuniyet_kosullari_en");
            $kategori = " Graduation Requirements";
        }


        else if($kategori == "egitim-sekli"){
            $egitim_sekli = Bilgiler::where('bolum_id',$bolum_id)->pluck("egitim_sekli_en");
            $kategori = " Mode of Study";
        }


        else if($kategori == "bolum-baskanligi-ve-akts-koordinatorlugu")
        {
            $bolum_bsk_ve_akts_koord = Bilgiler::where('bolum_id',$bolum_id)->pluck("bolum_bsk_ve_akts_koord_en");
            $kategori = "Programme Director and ECTS Coord.";
        }

        else if($kategori == "degerlendirme-anketleri")
        {
            $degerlendirme_anketleri = Bilgiler::where('bolum_id',$bolum_id)->pluck("degerlendirme_anketleri_en");
            $kategori = "Evaluation Questionnaires ";
        }

        else if($kategori == "iletisim-bilgileri")
        {
            $iletisim_bilgileri = Bilgiler::where('bolum_id',$bolum_id)->pluck("iletisim_bilgileri_en");
            $kategori = "Contact Information";
        }

        else
        {
            return view("errors.404");
        }

       $bolum = Bolumler::select('bolum_adi_en','bolum_adi_link','birim_id')->where('id',$bolum_id)->get(); //ör: bilgisayar-muhendisligi

       $program   = $bolum[0]['bolum_adi_en'];
       $bolumLink = $bolum[0]['bolum_adi_link'];
       $birim_id  = $bolum[0]['birim_id'];

       $derece_id = Birimler::select('derece_id')->where('id',$birim_id)->get();
       $derece_id = $derece_id[0]["derece_id"];

       // Birimler modeli içerisinde yazılan derece fonksiyonu aracılığıyla birimin adı çağrıldı.
       \App::setLocale('en'); //varsayılan 'tr' klasörü olduğu için 'en' klasörü locale kısmına set edildi.
       $nesne = new Birimler(); 
       $derece_adi = $nesne->derece($derece_id);


        return view('program-bilgileri')->with('bolum',$program)
                                        ->with('bolumLink',$bolumLink)
                                        ->with('bolum_id',$bolum_id)
                                        ->with('amac',$amac)
                                        ->with('kazanilan_derece',$kazanilan_derece)
                                        ->with('derece_seviyesi', $derece_seviyesi)
                                        ->with('kabul_sartlari', $kabul_sartlari)
                                        ->with('onceki_ogrenmenin_taninmasi', $onceki_ogrenmenin_taninmasi)
                                        ->with('yeterlilik_kosullari', $yeterlilik_kosullari)
                                        ->with('program_profili', $program_profili)
                                        ->with('program_yeterlilik_ve_tycc_matrisi', $program_yeterlilik_ve_tycc_matrisi)
                                        ->with('istihdam_olanaklari', $istihdam_olanaklari)
                                        ->with('ust_derece_programlara_gecis', $ust_derece_programlara_gecis)                           
                                        ->with('dersler_ve_akts',$dersler_ve_akts)
                                        ->with('ders_detay', $ders_detay)
                                        ->with('ders_kategori_listesi', $ders_kategori_listesi)
                                        ->with('ders_ve_program_yeterlilik_matrisi', $ders_ve_program_yeterlilik_matrisi)
                                        ->with('olcme_degerlendirme', $olcme_degerlendirme)
                                        ->with('mezuniyet_kosullari', $mezuniyet_kosullari)
                                        ->with('egitim_sekli', $egitim_sekli)
                                        ->with('bolum_bsk_ve_akts_koord', $bolum_bsk_ve_akts_koord)
                                        ->with('degerlendirme_anketleri', $degerlendirme_anketleri)
                                        ->with('dereceBilgisi',$dereceBilgisi)
                                        ->with('kabul_sartlari',$kabul_sartlari)
                                        ->with('iletisim_bilgileri',$iletisim_bilgileri)
                                        ->with('dil','en')
                                        ->with('derece_adi',$derece_adi)
                                        ->with('kategori', $kategori)
                                        ->with('kategori_link',$kategori_link);
    }


    public function dersDetay($dereceBilgisi=null, $program=null, $ders=null, $ders_detay_id=null)
    {

        $dersler_detay = DersDetay::findorfail($ders_detay_id);
        $dersler    = Dersler::findorfail($dersler_detay['id']);

        $bolum = Bolumler::select('id','bolum_adi','bolum_adi_link','birim_id')->where('id',$dersler['bolum_id'])->get();

        $program   = $bolum[0]['bolum_adi'];
        $bolumLink = $bolum[0]['bolum_adi_link'];
        $birim_id  = $bolum[0]['birim_id'];
        $bolum_id  = $bolum[0]['id'];
        $derece_adi=getDereceBilgisi($dereceBilgisi);
        $dersin_adi=$dersler['dersin_adi_tr'];


        return view('ders-detay')->with('dersler_detay', $dersler_detay)
                                 ->with('dersler', $dersler)
                                 ->with('dil','tr')
                                 ->with('dereceBilgisi',$dereceBilgisi)
                                 ->with('bolum',$program)
                                 ->with('bolumLink',$bolumLink)
                                 ->with('bolum_id',$bolum_id)
                                 ->with('derece_adi',$derece_adi)
                                 ->with('kategori', $dersin_adi)
                                 ->with('kategori_link',$ders)
                                 ->with('ders_detay_id',$ders_detay_id);
    }

    
    public function dersDetay_en($dereceBilgisi=null, $program=null, $ders=null, $ders_detay_id=null)
    {

        $dersler_detay = DersDetay::findorfail($ders_detay_id);
        $dersler    = Dersler::findorfail($dersler_detay['id']);

        $bolum = Bolumler::select('id','bolum_adi_en','bolum_adi_link','birim_id')->where('id',$dersler['bolum_id'])->get();

        $program   = $bolum[0]['bolum_adi_en'];
        $bolumLink = $bolum[0]['bolum_adi_link'];
        $birim_id  = $bolum[0]['birim_id'];
        $bolum_id  = $bolum[0]['id'];
        $derece_adi=getDereceBilgisi($dereceBilgisi);
        $dersin_adi=$dersler['dersin_adi_en'];

        $derece_id = Birimler::select('derece_id')->where('id',$birim_id)->get();
        $derece_id = $derece_id[0]["derece_id"];

       \App::setLocale('en'); //varsayılan 'tr' klasörü olduğu için 'en' klasörü locale kısmına set edildi.
       $nesne = new Birimler(); 
       $derece_adi = $nesne->derece($derece_id);


        return view('ders-detay')->with('dersler_detay', $dersler_detay)
                                 ->with('dersler', $dersler)
                                 ->with('dil','en')
                                 ->with('dereceBilgisi',$dereceBilgisi)
                                 ->with('bolum',$program)
                                 ->with('bolumLink',$bolumLink)
                                 ->with('bolum_id',$bolum_id)
                                 ->with('derece_adi',$derece_adi)
                                 ->with('kategori',$dersin_adi)
                                 ->with('kategori_link',$ders)
                                 ->with('ders_detay_id',$ders_detay_id);
    }

}



    // linkten gelen "yuksek-lisans" şeklindeki linki başlık olarak "Yüksek Lisans" olarak dönüştürüyor.
    function getDereceBilgisi($getDerece){

        if("doktora" == $getDerece)
        {
            $getDereceBaslik = "Doktora";
            return $getDereceBaslik;
        }

        else if("yuksek-lisans" == $getDerece)
        {
            $getDereceBaslik = "Yüksek Lisans";
            return $getDereceBaslik;
        }

        else if("lisans" == $getDerece)
        {
            $getDereceBaslik = "Lisans";
            return $getDereceBaslik;
        }

        else if("on-lisans" == $getDerece)
        {
            $getDereceBaslik = "Ön Lisans";
            return $getDereceBaslik;
        }

        else
            return view('errors.404');
    }