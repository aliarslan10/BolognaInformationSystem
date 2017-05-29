<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

use App\Dersler;
use App\DersDetay;

class DersDetayController extends Controller
{
    public function detayEkle(Request $request){
				
		$data= $request->only('on_kosul','onerilen_ders','ders_verilis_bicimi', 'ders_dili', 'ders_seviyesi',
			'ders_turu', 'staj', 'ders_koord', 'dersi_verenler', 'dersi_verenin_yard', 'ders_icerik', 'ders_amac','ders_id',
			'on_kosul_en','onerilen_ders_en','ders_verilis_bicimi_en', 'ders_dili_en', 'ders_seviyesi_en',
			'ders_turu_en', 'staj_en', 'ders_koord_en', 'dersi_verenler_en', 'dersi_verenin_yard_en', 'ders_icerik_en', 'ders_amac_en');

		// join'in ilk satırı, diğer tablonun adı.
		$ders_detay_id = Dersler::join('ders_detay','dersler.id', '=', 'ders_detay.dersler_id')->select('ders_detay.id')->where('ders_detay.dersler_id',$data['ders_id'])->get();

		$ders_detay = DersDetay::findOrFail($ders_detay_id[0]['id']);
		$ders_detay->on_kosul_dersleri = $data['on_kosul'];
		$ders_detay->onerilen_dersler  = $data['onerilen_ders'];
		$ders_detay->dersin_verilis_bicimi = $data['ders_verilis_bicimi'];
		$ders_detay->dersin_dili	= $data['ders_dili'];
		$ders_detay->dersin_seviyesi= $data['ders_seviyesi'];
		$ders_detay->dersin_turu	= $data['ders_turu'];
		$ders_detay->staj			= $data['staj'];
		$ders_detay->ders_koord 	= $data['ders_koord'];
		$ders_detay->dersi_verenler	= $data['dersi_verenler'];
		$ders_detay->dersi_verenin_yard = $data['dersi_verenin_yard'];
		$ders_detay->ders_icerik = $data['ders_icerik'];
		$ders_detay->dersin_amaci= $data['ders_amac'];
		$ders_detay->onkosul_dersleri_en = $data['on_kosul_en'];
		$ders_detay->onerilen_dersler_en  = $data['onerilen_ders_en'];
		$ders_detay->dersin_verilis_bicimi_en = $data['ders_verilis_bicimi_en'];
		$ders_detay->dersin_dili_en	= $data['ders_dili_en'];
		$ders_detay->dersin_seviyesi_en= $data['ders_seviyesi_en'];
		$ders_detay->dersin_turu_en	= $data['ders_turu_en'];
		$ders_detay->staj_en		= $data['staj_en'];
		$ders_detay->ders_koord_en	= $data['ders_koord_en'];
		$ders_detay->dersi_verenler_en	= $data['dersi_verenler_en'];
		$ders_detay->dersi_verenin_yard_en = $data['dersi_verenin_yard_en'];
		$ders_detay->ders_icerik_en = $data['ders_icerik_en'];
		$ders_detay->dersin_amaci_en= $data['ders_amac_en'];

		$ders_detay->save();

		return Redirect::back();
	}
}
