<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DersDetay extends Model
{
    protected $table = "ders_detay";

    protected $fillable = ['onkosul_dersleri','onerilen_dersler','dersin_verilis_bicimi', 'dersin_dili', 'dersin_seviyesi',
			'dersin_turu', 'staj', 'ders_koord', 'dersi_verenler', 'dersi_verenin_yard', 'ders_icerik',
    'onkosul_dersleri_en','onerilen_dersler_en','dersin_verilis_bicimi_en', 'dersin_dili_en', 'dersin_seviyesi_en',
			'dersin_turu_en', 'staj_en', 'ders_koord_en', 'dersi_verenler_en', 'dersi_verenin_yard_en', 'ders_icerik_en',
			'dersin_amaci', 'dersin_amaci_en', 'dersler_id', 'updated_at', 'created_at'];
}