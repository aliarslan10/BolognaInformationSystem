<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class YonetimController extends Controller
{
    public function kontrolPaneli(){
    	return view('yonetim.master_yonetim');
    }

    public function icerikTanimlari(){
    	return view('yonetim.icerikTanimlari.index');
    }

    public function fakulteTanimlari(){
    	return view('yonetim.fakulteTanimlari');
    }

    public function programTanimlari(){
    	return view('yonetim.ProgramTanimlari.index');
    }

    public function ogrenimCiktilariVeYetkileri(){
    	return view('yonetim.ogrenimCiktilariVeYetkileri');
    }

    public function tyccTanimlari(){
    	return view('yonetim.tyccTanimlari');
    }

    public function dersTanimlari(){
    	return view('yonetim.DersTanimlari.index');
    }

    public function bilgileriKopyala(){
    	return view('yonetim.BilgileriKopyala.index');
    }

    public function webIslemleri(){
    	return view('yonetim.webIslemleri');
    }
}
