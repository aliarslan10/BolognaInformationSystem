<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilgiler extends Model
{
    protected $table = "bilgiler";

    protected $fillable = ['amac', 'kazanilan_derece', 'derece_seviyesi', 'kabul_sartlari', 'onceki_ogrenmenin_taninmasi', 
    						'yeterlilik_kosullari', 'mezuniyet_kosullari', 'iletisim_bilgileri', 'updated_at', 'created_at', 
    						'amac_en', 'kazanilan_derece_en', 'derece_seviyesi_en', 'kabul_sartlari_en', 'onceki_ogrenmenin_taninmasi_en', 
    						'yeterlilik_kosullari_en', 'mezuniyet_kosullari_en', 'iletisim_bilgileri_en', 'bolum_id', 'program_profili', 'program_profili_en',
    						'program_yeterlilik_ve_tycc_matrisi', 'program_yeterlilik_ve_tycc_matrisi_en', 'istihdam_olanaklari', 'istihdam_olanaklari_en',
    						'ust_derece_programlara_gecis', 'ust_derece_programlara_gecis_en', 'ders_kategori_listesi', 'ders_kategori_listesi_en',
    						'ders_ve_program_yeterlilik_matrisi', 'ders_ve_program_yeterlilik_matrisi_en', 'olcme_degerlendirme', 'olcme_degerlendirme_en',
    						'bolum_bsk_ve_akts_koord', 'bolum_bsk_ve_akts_koord_en', 'degerlendirme_anketleri', 'degerlendirme_anketleri_en',
    						'egitim_sekli', 'egitim_sekli_en'];

    protected $hidden = ['id'];
}
