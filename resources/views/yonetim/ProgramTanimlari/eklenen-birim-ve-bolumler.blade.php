@extends('yonetim/master_yonetim')

@section('page_header')
	Program Tanımları
@stop

@section('sayfa_aciklamasi')
	- Derecelerine Göre Eklenen Birim ve Bölümlerin Listesi
@stop

@section('icerik_yonetim')

<div>
<i> Arama yapacağınız kategoriyi seçin : </i>

{!! Form::open(['class'=>'ProgramTanimlariGoruntule@eklenenBirimVeBolumler', 'method'=>'POST']) !!}
	{!! Form::radio('secim', 'derece', true) !!} Derecelerde Ara &nbsp;&nbsp;&nbsp;                         
	{!! Form::radio('secim', 'birim') !!} Birimlerde Ara &nbsp;&nbsp;&nbsp;
	{!! Form::radio('secim', 'bolum') !!} Bölümlerde Ara <br />
	{!! Form::text('ara', null, ['size' => '45x2'] ) !!}
	{!! Form::submit(' Ara ') !!}
{!! Form::close() !!}
</div>

<div>
<table width="100%" border="0">
	<tr bgcolor="gold">
		<th>  DERECELER  </th>
		<th>  BİRİMLER  </th>
		<th>  BÖLÜMLER </th>
		<th>  İNGİLİZCE ADI </th>
		<th> <center> DÜZENLE </center> </th>
		<th> <center> DURUM </center> </th>
	</tr>

<?php $i=0; ?>
@foreach($bolumler as $bolum)
	@foreach($birimler as $birim)
		@if(($birim->id) == ($bolum->birim_id))
		@if($i%2 == 0)
		<tr bgcolor="white"> @else <tr> @endif <?php $i++ ?> <!-- <tr>lerden biri aktif oluyor -->
		 	<td width="110px"> {{ $birim->derece }}    </td> 
			<td width="340"> {{ $birim->birim_adi }} </td> 
			<td width="310"> {{ $bolum->bolum_adi }} </td>
			<td width="310"> {{ $bolum->bolum_adi_en }} </td>
			<td width="80px"> <center> <a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/ProgramTanimlari/eklenen-birim-ve-bolumler/duzenle/{{$bolum->id}}"> <img src="{{ asset('photo/edit-icon.png') }}"/> </a></center></td>
			<td> <center>  @if(($bolum->durum) == 1) <font color="green"> Aktif </font> @else <font color="red"> Pasif </font> </del> @endif </center> </td>
		</tr>
		@endif
	@endforeach
@endforeach
</table>
</div>
@stop

</body>
</html>