@extends('yonetim/master_yonetim')


@section('page_header')
	Program Tanımları
@stop

@section('sayfa_aciklamasi')
	- Bu sayfadan bölüm ile ilgili tanımlamaları yapabilirsiniz.
@stop

@section('icerik_yonetim')

<a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/ProgramTanimlari/birim-ekle"> Yeni birim ekle</a> | 
<a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/ProgramTanimlari/bolum-ekle"> Bölüm Ekle </a> |
<a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/ProgramTanimlari/eklenen-birim-ve-bolumler"> Eklenen Birim ve Bölümler </a>

@stop

</body>
</html>