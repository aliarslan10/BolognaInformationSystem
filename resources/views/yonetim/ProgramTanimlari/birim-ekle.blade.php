@extends('yonetim/master_yonetim')

@section('page_header')
	Program Tanımları
@stop

@section('sayfa_aciklamasi')
	- Yeni Birim Ekleme ve Güncelleme Paneli
@stop

@section('icerik_yonetim')

<!-- doktora ve yüksek lisans içerikleri aynı olduğu için her ikisinin de value değeri : 2 -->

<div class="sol" style="border-right: 1px solid gray; width: 30%">
	<table border="0" width="100%">
		{!! Form::open(['route' => 'birimekle']) !!}
			
			<tr><th colspan="2"><u> Yeni Birim Ekle </u></th></tr>
			<th colspan="2"> Derece Seçin (Türkçe / İngilizce): </th>
			<tr>
			<td> {!! Form::radio('derece_id', '3', true) !!} Doktora </td>
			</tr>
			<tr>
			<td> {!! Form::radio('derece_id', '2') !!} Yüksek Lisans </td>
			</tr>
			<tr>
			<td>{!! Form::radio('derece_id', '1') !!} Lisans </td>
			</tr>
			<tr>
			<td>{!! Form::radio('derece_id', '0') !!} Ön Lisans </td>
			</tr>
			<tr><th> Türkçe Birim Adı 	</th><td> {!! Form::text('birim_adi', null, ['size' => '25x5'] )!!} </td></tr>
			<tr><th> İngilizce Birim Adı </th><td> {!! Form::text('birim_adi_en', null, ['size' => '25x5'] )!!} </td></tr>
			<tr>
			<td colspan="2">
			{!! Form::submit('Kaydet', ['size'=>'50x5']) !!}{!! Form::close() !!} <!-- close burada olmazsa iptal butonu formu submit eder-->
			<a href="/Bologna_Bilgi_Sistemi/public/yonetim/program-tanimlari"> {!! Form::submit('İptal', ['size'=>'50x5']) !!} </a>
			</td>
			</tr>
		</table>
</div>
<div class="sag"> 
	<table border="0" width="100%">
		{!! Form::open(['class' => 'ProgramTanimlari@birimGuncelle']) !!}
		
			<tr><th colspan="2"><u> Birim Güncelle </u></th></tr>
			<th colspan="2"> Derece Seçin (Türkçe / İngilizce): </th>
			<tr>
			<td> {!! Form::radio('yeniDereceAdi', '3', true) !!} Doktora </td>
			</tr>
			<tr>
			<td> {!! Form::radio('yeniDereceAdi', '2') !!} Yüksek Lisans </td>
			</tr>
			<tr>
			<td>{!! Form::radio('yeniDereceAdi', '1') !!} Lisans</td>
			</tr>
			<tr>
			<td>{!! Form::radio('yeniDereceAdi', '0') !!} Ön Lisans </td>
			</tr>

			<tr><th colspan="2" > Güncellenecek Birimi Seçin: </th></tr>
			<tr><td colspan="2"><select name="birim_id">
			 	
			@foreach($birimler as $birim)
				<option value="{{ $birim->id }}"> {{ $birim->derece }} - {{ $birim->birim_adi }} - {{ $birim->birim_adi_en }} </option>
			@endforeach


			</select></td>
			</tr>
			

			<tr><th> Türkçe Birim Adı 	</th><td> {!! Form::text('yeniBirimAdi', null, ['size' => '42x5'] )!!} </td></tr>
			<tr><th> İngilizce Birim Adı </th><td> {!! Form::text('yeniBirimAdiEn', null, ['size' => '42x5'] )!!} </td></tr>
			<tr>
			<td colspan="2">
			{!! Form::submit('Güncelle', ['size'=>'50x5']) !!}{!! Form::close() !!} <!-- close burada olmazsa iptal butonu formu submit eder-->
			<a href="/Bologna_Bilgi_Sistemi/public/yonetim/program-tanimlari"> {!! Form::submit('İptal', ['size'=>'50x5']) !!} </a>
			</td>
			</tr>
	</table>
</div>
@stop

</body>
</html>