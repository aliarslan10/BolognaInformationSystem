<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| Ali ARSLAN - Computer Engineer
| aliarslan10@yandex.com.tr
*/

Route::get('/index', 'PagesController@anasayfa');
Route::get('/', function(){
	return view('ornek_icerik');
});

Route::get('/en', function(){
	return view('ornek_icerik_en');
});

/************************ (((İNGİLİZCE ))) *********************/
Route::group(['prefix'=>'en'], function(){
	Route::get('/akademik-birimler/{dereceBilgisi}',"PagesController@goruntule_en");
	Route::get('/akademik-birimler/{dereceBilgisi}/{program?}/{bilgi?}/{id}', 'PagesController@programBilgileri_en');
	Route::get('/akademik-birimler/{dereceBilgisi}/{program?}/detay/{ders}/{ders_id}', 'PagesController@dersDetay_en');
});

/************************* KULLANICI ARAYÜZÜ SAYFALARI **************************/
Route::get('/akademik-birimler/{dereceBilgisi}', 'PagesController@goruntule');
Route::get('/akademik-birimler/{dereceBilgisi}/{program?}/{bilgi?}/{id}', 'PagesController@programBilgileri');
Route::get('/akademik-birimler/{dereceBilgisi}/{program?}/detay/{ders?}/{ders_detay_id}', 'PagesController@dersDetay');


/************************* YÖNETİM PANELİ SAYFALARI **************************/
Route::get('/yonetim', 'YonetimController@kontrolPaneli');
Route::get('/yonetim/program-tanimlari', 'YonetimController@programTanimlari');
Route::get('/yonetim/ders-tanimlari', 'YonetimController@dersTanimlari');
Route::get('/yonetim/icerik-tanimlari', 'YonetimController@icerikTanimlari');

Route::get('/yonetim/fakulte-tanimlari', 'YonetimController@fakulteTanimlari');
Route::get('/yonetim/ogrenim-ciktilari-ve-yetkileri', 'YonetimController@ogrenimCiktilariVeYetkileri');
Route::get('/yonetim/tycc-tanimlari', 'YonetimController@tyccTanimlari');
Route::get('/yonetim/web-islemleri', 'YonetimController@webIslemleri');


/************************* PROGRAM TANIMLARI SAYFALARI **************************/
Route::get('/yonetim/ProgramTanimlari/birim-ekle', ["as"=>"birim.ekle.donus", "uses"=>"ProgramTanimlariGoruntule@BirimEkle"]);
Route::get('/yonetim/ProgramTanimlari/bolum-ekle',["as"=>"bolum.ekle.donus","uses"=>'ProgramTanimlariGoruntule@BolumEkle']);
Route::get('/yonetim/ProgramTanimlari/eklenen-birim-ve-bolumler', 'ProgramTanimlariGoruntule@eklenenBirimVeBolumler');
Route::post('/yonetim/ProgramTanimlari/eklenen-birim-ve-bolumler', 'ProgramTanimlariGoruntule@eklenenBirimVeBolumlerAra');
Route::get('/yonetim/ProgramTanimlari/eklenen-birim-ve-bolumler/duzenle/{id}', 'ProgramTanimlariGoruntule@bolumGuncellemeSayfasi');

Route::post('/yonetim/ProgramTanimlari/birim-ekle', 'ProgramTanimlari@birimGuncelle');
Route::post('/yonetim/ProgramTanimlari/eklenen-birim-ve-bolumler/duzenle/{id}', 'ProgramTanimlari@bolumGuncelle');


Route::post('birimEkle',array( //tek sayfada 2 post olunca birini bu şekilde yapmak zorunda kaldım. ekle? güncelle?
    'as' => 'birimekle',
    'uses' => 'ProgramTanimlari@birimEkle'
));


Route::post('/bolumEkle',array(
    'as' => 'bolumekle',
    'uses' => 'ProgramTanimlari@bolumEkle'  ));


/***************************************************************/


/************************* DERS TANIMLARI SAYFALARI **************************/
Route::get('/yonetim/DersTanimlari/bolum-sec','DersTanimlariGoruntule@bolumleriGoruntule');
Route::get('/yonetim/DersTanimlari/ders-ekle/{bolum_id}','DersTanimlariGoruntule@dersTanimla');
Route::get('/yonetim/DersTanimlari/ders-duzenle/{id}', 'DersTanimlariGoruntule@dersDuzenle');
Route::get('/yonetim/DersTanimlari/ders-detay/bolum-sec','DersDetayGoruntule@bolumleriGoruntule');
Route::get('/yonetim/DersTanimlari/ders-detay/{bolum_id}','DersDetayGoruntule@dersleriGoruntule');
Route::get('/yonetim/DersTanimlari/ders-detay-ekle/{ders_id}','DersDetayGoruntule@dersDetayEkle');
Route::post('/yonetim/DersTanimlari/ders-detay-ekle','DersDetayController@detayEkle');

Route::post('/dersEkle', array(
	'as' => 'dersekle',
	'uses' => 'DersTanimlari@dersEkle' ));

Route::post('/dersGuncelle', array(
	'as' => 'dersduzenle',
	'uses' => 'DersTanimlari@dersGuncelle'));


/************************* İÇERİK TANIMLARI SAYFALARI **************************/
Route::get('/yonetim/icerik-tanimlari/bolum-sec','IcerikTanimlariGoruntule@bolumleriGoruntule');
Route::get('/yonetim/icerik-tanimlari/icerik-ekle/{bolum_id}','IcerikTanimlariGoruntule@icerikTanimla');

Route::post('/bilgiEkle', array(
	'as' => 'bilgiekle',
	'uses' => 'IcerikTanimlari@bilgiEkle' ));


/************************* BİLGİLERİ KOPYALA SAYFASI **************************/
Route::get('/yonetim/bilgileri-kopyala', 'YonetimController@bilgileriKopyala');
Route::post('/yonetim/bilgileri-kopyala', 'BilgileriKopyala@kopyala');