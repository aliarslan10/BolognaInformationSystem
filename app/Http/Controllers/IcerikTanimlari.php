<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bilgiler;
use App\Bolumler;
use Redirect;

class IcerikTanimlari extends Controller
{
    public function bilgiEkle(Request $request){

		$data= $request->only('amac', 'kazanilan_derece', 'derece_seviyesi', 'kabul_sartlari', 'onceki_ogrenmenin_taninmasi', 
    						'yeterlilik_kosullari', 'mezuniyet_kosullari', 'iletisim_bilgileri', 'amac_en', 'kazanilan_derece_en', 
    						'derece_seviyesi_en', 'kabul_sartlari_en', 'onceki_ogrenmenin_taninmasi_en', 'yeterlilik_kosullari_en',
    						'mezuniyet_kosullari_en', 'iletisim_bilgileri_en', 'bolum_id', 'program_profili', 'program_profili_en',
    						'program_yeterlilik_ve_tycc_matrisi', 'program_yeterlilik_ve_tycc_matrisi_en', 'istihdam_olanaklari', 'istihdam_olanaklari_en',
    						'ust_derece_programlara_gecis', 'ust_derece_programlara_gecis_en', 'ders_kategori_listesi', 'ders_kategori_listesi_en',
    						'ders_ve_program_yeterlilik_matrisi', 'ders_ve_program_yeterlilik_matrisi_en', 'olcme_degerlendirme', 'olcme_degerlendirme_en',
    						'bolum_bsk_ve_akts_koord', 'bolum_bsk_ve_akts_koord_en', 'degerlendirme_anketleri', 'degerlendirme_anketleri_en',
    						'egitim_sekli', 'egitim_sekli_en');
		

        if (Bilgiler::where('bolum_id', '=', $data['bolum_id'])->count() > 0) // varsa güncelle
        {
            $bilgiler_id = Bilgiler::where('bolum_id', '=', $data['bolum_id'])->pluck('id');
            $bilgiler_ekle = Bilgiler::findorfail($bilgiler_id);
            $bilgiler_ekle->amac = $data['amac'];
            $bilgiler_ekle->kazanilan_derece = $data['kazanilan_derece'];
            $bilgiler_ekle->derece_seviyesi = $data['derece_seviyesi'];
            $bilgiler_ekle->kabul_sartlari = $data['kabul_sartlari'];
            $bilgiler_ekle->onceki_ogrenmenin_taninmasi = $data['onceki_ogrenmenin_taninmasi'];
            $bilgiler_ekle->yeterlilik_kosullari = $data['yeterlilik_kosullari'];
            $bilgiler_ekle->mezuniyet_kosullari = $data['mezuniyet_kosullari'];
            $bilgiler_ekle->iletisim_bilgileri = $data['iletisim_bilgileri'];
            $bilgiler_ekle->amac_en = $data['amac_en'];
            $bilgiler_ekle->kazanilan_derece_en = $data['kazanilan_derece_en'];
            $bilgiler_ekle->kabul_sartlari_en = $data['kabul_sartlari_en'];
            $bilgiler_ekle->onceki_ogrenmenin_taninmasi_en = $data['onceki_ogrenmenin_taninmasi_en'];
            $bilgiler_ekle->yeterlilik_kosullari_en = $data['yeterlilik_kosullari_en'];
            $bilgiler_ekle->mezuniyet_kosullari_en = $data['mezuniyet_kosullari_en'];
            $bilgiler_ekle->iletisim_bilgileri_en = $data['iletisim_bilgileri_en'];
            $bilgiler_ekle->program_profili = $data['program_profili'];
            $bilgiler_ekle->program_profili_en = $data['program_profili_en'];
            $bilgiler_ekle->program_yeterlilik_ve_tycc_matrisi = $data['program_yeterlilik_ve_tycc_matrisi'];
            $bilgiler_ekle->program_yeterlilik_ve_tycc_matrisi_en = $data['program_yeterlilik_ve_tycc_matrisi_en'];
            $bilgiler_ekle->istihdam_olanaklari = $data['istihdam_olanaklari'];
            $bilgiler_ekle->istihdam_olanaklari_en = $data['istihdam_olanaklari_en'];
            $bilgiler_ekle->ust_derece_programlara_gecis = $data['ust_derece_programlara_gecis'];
            $bilgiler_ekle->ust_derece_programlara_gecis_en = $data['ust_derece_programlara_gecis_en'];
            $bilgiler_ekle->ders_kategori_listesi = $data['ders_kategori_listesi'];
            $bilgiler_ekle->ders_kategori_listesi_en = $data['ders_kategori_listesi_en'];
            $bilgiler_ekle->ders_ve_program_yeterlilik_matrisi = $data['ders_ve_program_yeterlilik_matrisi'];
            $bilgiler_ekle->ders_ve_program_yeterlilik_matrisi_en = $data['ders_ve_program_yeterlilik_matrisi_en'];
            $bilgiler_ekle->olcme_degerlendirme = $data['olcme_degerlendirme'];
            $bilgiler_ekle->olcme_degerlendirme_en = $data['olcme_degerlendirme_en'];
            $bilgiler_ekle->bolum_bsk_ve_akts_koord = $data['bolum_bsk_ve_akts_koord'];
            $bilgiler_ekle->bolum_bsk_ve_akts_koord_en = $data['bolum_bsk_ve_akts_koord_en'];
            $bilgiler_ekle->degerlendirme_anketleri = $data['degerlendirme_anketleri'];
            $bilgiler_ekle->degerlendirme_anketleri_en = $data['degerlendirme_anketleri_en'];
            $bilgiler_ekle->egitim_sekli = $data['egitim_sekli'];
            $bilgiler_ekle->egitim_sekli_en = $data['egitim_sekli_en'];
            $bilgiler_ekle->save();
        }

        else //yoksa ekle
        {
            $bilgiler_ekle = new Bilgiler();
            $bilgiler_ekle->fill($data);
            $bilgiler_ekle->save();
        }

	   return Redirect::back()->withErrors(['Bilgi ekleme işlemi başarılı :', 'diğer mesaj']);
    }
}
