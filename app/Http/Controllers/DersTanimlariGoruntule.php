<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Birimler;
use App\Bolumler;
use App\Dersler;

class DersTanimlariGoruntule extends Controller
{
    public function dersTanimla($bolum_id){

    	$bolum 	 = Bolumler::findorfail($bolum_id);
    	$dersler = Dersler::where('bolum_id','=', $bolum_id)->get();

        return view('yonetim.DersTanimlari.ders-ekle')->with('dersler', $dersler)
        											  ->with('bolum', $bolum);
    }


    public function bolumleriGoruntule(){
    	$bolumler = Bolumler::all();
    	$birimler = Birimler::all();

    	return view('yonetim.DersTanimlari.bolum-sec')->with('bolumler', $bolumler)
    												  ->with('birimler', $birimler);
    }

    public function dersDuzenle($ders_id){

    	$dersBilgileri = Dersler::findorfail($ders_id);

    	return view('yonetim.DersTanimlari.ders-duzenle')->with('ders', $dersBilgileri);
    }
}
