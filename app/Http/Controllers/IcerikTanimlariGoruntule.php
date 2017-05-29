<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Birimler;
use App\Bolumler;
use App\Bilgiler;

class IcerikTanimlariGoruntule extends Controller
{

    public function bolumleriGoruntule(){
    	$bolumler = Bolumler::all();
    	$birimler = Birimler::all();

    	return view('yonetim.IcerikTanimlari.bolum-sec')->with('bolumler', $bolumler)
    												  	->with('birimler', $birimler);
    }


    public function icerikTanimla($bolum_id){

        if (Bilgiler::select('*')->where('bolum_id','=',$bolum_id)->count() > 0) // varsa...
        {
            $icerikler = Bilgiler::select('*')->where('bolum_id','=',$bolum_id)->get();
        }

        else
        {
            $icerikler = null;
        }

    	$id = Bolumler::where('id',$bolum_id)->pluck('id');
        return view('yonetim.IcerikTanimlari.icerik-ekle')->with('bolum_id',$id)
                                                          ->with('icerikler', $icerikler);
    }

}
