<?php

#Mutlaka olması gereken ifadeler :
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

use App\Dersler;
use App\DersDetay;

class DersTanimlari extends Controller
{
    public function dersEkle(Request $request){

		$data= $request->only('dersin_adi_tr','dersin_adi_en','dersin_yariyili', 'ortalama_durumu', 'zorunluluk_durumu',
			'dersin_saati', 'dersin_uygulama_saati', 'dersin_lab_saati', 'dersin_kredisi', 'bolum_kodu', 'ders_kodu', 'bolum_id',
			'zorunluluk_durumu_en');
		
		$dersler = new Dersler();
	    $dersler->fill($data);
		$dersler->save();


		$ders_id = $dersler->id;

	 	$dersDetay = new DersDetay();
	 	$dersDetay->dersler_id = $ders_id; // yeni eleman ekliyor ders_detay tablosuna.
		$dersDetay->save();

		return Redirect::back();
    }


    public function dersGuncelle(Request $request){
				
		$dersin_adi_tr 		   = $request->get('dersin_adi_tr');
		$dersin_adi_en		   = $request->get('dersin_adi_en');
		$dersin_yariyili 	   = $request->get('dersin_yariyili');
		$ortalama_durumu 	   = $request->get('ortalama_durumu');
		$zorunluluk_durumu     = $request->get('zorunluluk_durumu');
		$zorunluluk_durumu_en  = $request->get('zorunluluk_durumu_en');
		$dersin_saati 		   = $request->get('dersin_saati');
		$dersin_uygulama_saati = $request->get('dersin_uygulama_saati');
		$dersin_lab_saati	   = $request->get('dersin_lab_saati');
		$dersin_kredisi		   = $request->get('dersin_kredisi');
		$ders_kodu			   = $request->get('ders_kodu');
		$bolum_kodu			   = $request->get('bolum_kodu');
		$id_ders 			   = $request->get('id');

		$ders = Dersler::findOrFail($id_ders);
		$ders->dersin_adi_tr = "$dersin_adi_tr";
		$ders->dersin_adi_en = "$dersin_adi_en";
		$ders->dersin_yariyili = "$dersin_yariyili";
		$ders->ortalama_durumu = "$ortalama_durumu";
		$ders->zorunluluk_durumu = "$zorunluluk_durumu";
		$ders->zorunluluk_durumu_en = "$zorunluluk_durumu_en";
		$ders->dersin_saati = "$dersin_saati";
		$ders->dersin_uygulama_saati = "$dersin_uygulama_saati";
		$ders->dersin_lab_saati = "$dersin_lab_saati";
		$ders->dersin_kredisi = "$dersin_kredisi";
		$ders->ders_kodu		= "$ders_kodu";
		$ders->bolum_kodu = "$bolum_kodu";
		$ders->save();

		return Redirect::back()->withErrors(['Güncelleme işlemi başarılı : ', 'diğer mesaj']);
    }
}
