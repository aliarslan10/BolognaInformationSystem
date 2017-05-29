<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dersler extends Model
{
    protected $table = "dersler";

    protected $fillable = ['dersin_adi_tr','dersin_adi_en','dersin_yariyili', 'ortalama_durumu', 'zorunluluk_durumu',
			'dersin_saati', 'dersin_uygulama_saati', 'dersin_lab_saati', 'dersin_kredisi', 'bolum_kodu', 'ders_kodu', 'bolum_id',
			'zorunluluk_durumu_en'];
}
