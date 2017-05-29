<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Birimler;
use App\Bolumler;

class ProgramTanimlariGoruntule extends Controller
{
    public function BirimEkle(){

        $birimler = Birimler::select('id','birim_adi','birim_adi_en', 'derece')->orderby('derece')->get();
        return view('yonetim.ProgramTanimlari.birim-ekle')->with('birimler', $birimler);
    }


    public function BolumEkle(){
        $birimlerData = Birimler::all();
        $bolumlerData = Bolumler::select('id','bolum_adi','birim_id')->get();

        return view('yonetim.ProgramTanimlari.bolum-ekle')->with('birimler', $birimlerData)
                                                          ->with('bolumler', $bolumlerData);
    }


    public function bolumGuncellemeSayfasi($idBolum){

        $dataBolum = Bolumler::where('id', '=', $idBolum)->get();
        $dataBirim = Birimler::all();
    

        return view('yonetim.ProgramTanimlari.duzenle')->with('bolumBilgileri', $dataBolum)
                                                       ->with('birimBilgileri', $dataBirim);
    }


    public function eklenenBirimVeBolumler(){ //*$secim=null, $ara=null*

        $dataBirimler  = Birimler::all();

        //en son eklenen bölüm, listenin en başında görüntüleniyor. (create zamanına göre tersten listeleme)
        $dataBolumler  = Bolumler::select('*')->orderby('created_at','DESC')->get();

        return view('yonetim.ProgramTanimlari.eklenen-birim-ve-bolumler')->with('birimler',  $dataBirimler)
                                                                         ->with('bolumler',  $dataBolumler);                                                      
    }


  public function eklenenBirimVeBolumlerAra(Request $request ,$secim=null, $ara=null){ //*$secim=null, $ara=null*

        $aranan=$request->only('ara','secim'); // posttan
        
        $arananDerece = "";
        $arananBirim  = "";
        $arananBolum  = "";

        $secim = $aranan['secim'];
        $ara = $aranan['ara'];
        
        $trKarakter = array("i"=>"İ");

        if('birim' == $secim){
           $arananBirim = $ara;
           $arananBirim = strtr($arananBirim,$trKarakter);
           $arananBirim = mb_convert_case($arananBirim, MB_CASE_LOWER, "UTF-8");
        }


        else if('bolum' == $secim){
           $arananBolum = $ara;
           $arananBolum = strtr($arananBolum,$trKarakter);
           $arananBolum = mb_convert_case($arananBolum, MB_CASE_LOWER, "UTF-8");
        }

        else if('derece' == $secim){
           $arananDerece = $ara;
           $arananDerece = strtr($arananDerece,$trKarakter);
           $arananDerece = mb_convert_case($arananDerece, MB_CASE_LOWER, "UTF-8");
        }


        if($arananBirim != null){
            $dataBirimler  = Birimler::where('birim_adi','ILIKE', '%'.$arananBirim.'%')->get();
        }

        else{
            $dataBirimler  = Birimler::where('derece','ILIKE', '%'.$arananDerece.'%')->get();
        }

        //en son eklenen bölüm, listenin en başında görüntüleniyor. (create zamanına göre tersten listeleme)
        $dataBolumler  = Bolumler::where('bolum_adi','ILIKE','%'.$arananBolum.'%')->orderby('created_at','DESC')->get();

        return view('yonetim.ProgramTanimlari.eklenen-birim-ve-bolumler')->with('birimler',  $dataBirimler)
                                                                         ->with('bolumler',  $dataBolumler);                                                      
    }

    public function bolumDurum($idBolum){
      $bolum = Bolumler::findorFail($idBolum);
      $birim = Birimler::findorFail($bolum->id);
      return view('yonetim.ProgramTanimlari.durum')->with('bolum',$bolum)
                                                   ->with('birim',$birim);
    }
}



/*
    lcfirst() - Bir dizgenin ilk karakterini küçük harf yapar
    strtolower() - Bir dizgenin harflerini küçük harfe çevirir
    strtoupper() - Bir dizgenin harflerini büyük harfe çevirir
    ucwords($araBolum) - Dizgedeki her sözcüğün ilk harfini büyük harf yapar. Ama türkçe karakter sorunu var.
    $araBolum = mb_convert_case($araBolum, MB_CASE_TITLE, "UTF-8"); //ucwords() fonk. aynısı. türkçe karakter sorunu yok.

          $trKarakter = array('I'=>'ı', 'ı'=>'I', 'ı'=>'ı', 'I'=>'I',
            'i'=>'İ', 'İ'=>'i', 'İ'=>'İ', 'i'=>'i',
            'Ü'=>'ü', 'ü'=>'Ü', 'Ü' => 'Ü', 'ü'=>'ü',
            'ş' => 'Ş', 'Ş'=>'ş', 'Ş' => 'Ş', 'ş'=>'ş',
            'Ç'=>'ç', 'ç'=>'Ç', 'Ç' => 'Ç', 'ç' => 'ç',
            'ğ'=>'Ğ', 'Ğ'=>'ğ', 'ğ'=>'ğ', 'Ğ'=>'Ğ');

*/