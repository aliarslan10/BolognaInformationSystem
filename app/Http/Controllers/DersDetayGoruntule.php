<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Birimler;
use App\Bolumler;
use App\Dersler;
use App\DersDetay;

class DersDetayGoruntule extends Controller
{
    public function bolumleriGoruntule(){
        $bolumler = Bolumler::all();
        $birimler = Birimler::all();

        return view('yonetim.DersTanimlari.ders-detay-bolum-sec')->with('bolumler', $bolumler)
                                                      ->with('birimler', $birimler);
    }

    public function dersleriGoruntule($bolum_id){

    	$bolum 	 = Bolumler::findorfail($bolum_id);
    	$dersler = Dersler::where('bolum_id','=', $bolum_id)->get();
        $dersler_detay = DersDetay::all();


        return view('yonetim.DersTanimlari.ders-detay')->with('dersler', $dersler)
        											   ->with('bolum', $bolum)
                                                       ->with('dersler_detay', $dersler_detay);
    }


    public function dersDetayEkle($ders_id){

        $dersler = Dersler::findorfail($ders_id);
        $bolum = Bolumler::where('id','=',$dersler['bolum_id'])->get();

        // dd($bolum[0]['birim_id']); direkt where ile alınca verileri iki boyutlu dizide tutuyor.

        $birim_adi = Birimler::where('id','=',$bolum[0]['birim_id'])->pluck('birim_adi');
        $derece = Birimler::where('id','=',$bolum[0]['birim_id'])->pluck('derece');

        // join'in ilk satırı, diğer tablonun adı.
        $ders_detay = Dersler::join('ders_detay','dersler.id', '=', 'ders_detay.dersler_id')->select('ders_detay.*')->where('ders_detay.dersler_id',$dersler['id'])->get();

        return view('yonetim.DersTanimlari.ders-detay-ekle')->with('dersler', $dersler)
                                                            ->with('bolum', $bolum)
                                                            ->with('birim_adi', $birim_adi)
                                                            ->with('derece', $derece)
                                                            ->with('ders_detay', $ders_detay);
    }
}
