<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Birimler;
use App\Bolumler;
use App\Dereceler;
use Redirect;

class ProgramTanimlari extends Controller
{
	public function birimEkle(Request $request){

		$data = $request->only('birim_adi','birim_adi_en','derece_id');

		$temp = getDereceBilgisi($data['derece_id']);

		$data['derece'] = $temp[0];
		$data['derece_adi_en'] = $temp[1];

		$birim = new Birimler();
		$birim->fill($data);
		$birim->save();

    	return Redirect::back();
	}

	
	public function birimGuncelle(Request $request){

		$data = $request->only('birim_id', 'yeniBirimAdi', 'yeniBirimAdiEn');

		$derece_id = Birimler::where('id',$data['birim_id'])->pluck('derece_id');
		$temp = getDereceBilgisi($derece_id);

		$data['yeniDereceAdi'] = $temp[0];
		$data['yeniDereceAdiEn'] = $temp[1];

		//dd($data);

		$birim = Birimler::findorFail($data['birim_id']);
		$birim->birim_adi 	  = $data['yeniBirimAdi'];
		$birim->birim_adi_en  = $data['yeniBirimAdiEn'];
		$birim->derece 	      = $data['yeniDereceAdi'];
		$birim->derece_adi_en = $data['yeniDereceAdiEn'];
		$birim->save();

		return Redirect::back();

	}


	public function bolumEkle(Request $request){

		$data= $request->only('birim_id','bolum_id','bolum_adi','bolum_adi_en','durum');

		$data['bolum_adi_link'] = sef_link($data['bolum_adi']); //bölüm adını linke dönüştür

		$bolumler = new Bolumler();
		$bolumler->fill($data);
		$bolumler->save();

		return redirect()->route('bolum.ekle.donus')->with("mesaj_eklendi","Yeni bölüm başarıyla eklendi.");

	}


/* SİLİNECEK. VERİLER POST'TAN BÖYLE DE ALINABİLİR:
	public function bolumGuncelle(Request $request){

		$data= $request->only('bolum_id','bolum_adi','birim_id','bolum_adi_en');

		$bolumler = Bolumler::findorFail($data['bolum_id']);
		$bolumler->bolum_adi 	= $data['bolum_adi'];
		$bolumler->bolum_adi_en = $data['bolum_adi_en'];
		$bolumler->birim_id  	= $data['birim_id'];
		$bolumler->save();

		return redirect()->route('bolum.ekle.donus')->with("mesaj_guncellendi","Bolum başarıyla güncellendi.");
	}
*/


	public function bolumGuncelle(Request $request){

		$idBirim 	= $request->get('idBirim');
		$idBolum 	= $request->get('idBolum');
		$adBolum 	= $request->get('bolum_adi');
		$adBolum_en = $request->get('bolum_adi_en');
		$durum   	= $request->get('durum');


		$bolumler = Bolumler::findorFail($idBolum);
		$bolumler->bolum_adi 	= "$adBolum";
		$bolumler->bolum_adi_en = "$adBolum_en";
		$bolumler->birim_id  	= $idBirim;
		$bolumler->save();

		if($durum == 0)
		{
			$bolumler->durum= 1;
			$bolumler->save();
		}

		else if($durum == 1)
		{
			$bolumler->durum=0;
			$bolumler->save();
		}

		return Redirect::back()->withErrors(['Güncelleme işlemi başarılı :', 'diğer mesaj']);
		}
}


    //başlıkları linke çevir:
    function sef_link($string)
    {
        $turkce=array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
        $duzgun=array("s", "s", "i", "u", "u", "o", "o", "c", "c", "s", "s", "i", "g", "g", "i", "o", "o", "c", "c", "u", "u");
        $string = str_replace($turkce, $duzgun, $string);
        return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }



	/*$data = $request->only('bolum_adi','birim_id');
		$id degiskeni post veya get ile alinir


		$bolumler = new Bolumler($idBolum);
		$bolumler->fill($adBolum);
		$bolumler->save();
 */

	function getDereceBilgisi($a)
	{
		if($a == 0)
		{
			$derece_tr = "Ön Lisans";
			$derece_en = "Associate's Degree (Short Cycle) Programmes";
		}

		if($a == 1)
		{
			$derece_tr = "Lisans";
			$derece_en = "Bachelor's Degree (First Cycle) Programmes";
		}

		if($a == 2)
		{
			$derece_tr = "Yüksek Lisans";
			$derece_en = "Master's Degree (Second Cycle) Programmes";
		}

		if($a == 3)
		{
			$derece_tr = "Doktora";
			$derece_en = "Doctorate Degree (Third Cycle) Programmes";
		}

		return array($derece_tr, $derece_en);
	}