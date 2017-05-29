@extends('yonetim/master_yonetim')

@section('page_header')
	Program Tanımları
@stop

@section('sayfa_aciklamasi')
	- Birim ve bölüm isimlerini bu sayfadan düzenleyebilirsiniz.
@stop

@section('icerik_yonetim')

<div>
<table width="50%" border="0">

{!! Form::open(['action'=>'ProgramTanimlari@bolumGuncelle']) !!}
@foreach($bolumBilgileri as $bolum)
	@foreach($birimBilgileri as $birim)
		@if(($bolum->birim_id) == ($birim->id))

  

		<tr><th> Derece </th> <td> {{ $birim->derece }} </td></tr>
		<tr>
			<th> Birim Adı </th>
			<td> 
				<select name="idBirim">
				    @foreach($birimBilgileri as $birim)

				      @if(($bolum->birim_id) == ($birim->id))
				      	<option value="{{$birim->id}}" selected > {{$birim->birim_adi}} - {{$birim->derece}}</option>
				      @else
				      	<option value="{{$birim->id}}" > {{$birim->birim_adi}} - {{$birim->derece}}</option>
				      @endif

				    @endforeach
				</select>
			</td>
		</tr>
		<tr>
			<th> Bölüm Adı (Türkçe) </th>
			<td><input type="text" name ="bolum_adi" value="{{ $bolum->bolum_adi }}" size="50" /></td>
		</tr>
			<tr>
			<th> Bölüm Adı (İngilizce) </th>
			<td><input type="text" name ="bolum_adi_en" value="{{ $bolum->bolum_adi_en }}" size="50" /></td>
		</tr>
		<tr>
			<th> Durum </th>
			<td> (@if(($bolum->durum) == 1) Aktif @else Pasif @endif) - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				@if(($bolum->durum) == '1')
					<input type="radio" name="durum" value="1" /> Pasif Et
				@else
					<input type="radio" name="durum" value="0" /> Aktif Et
				@endif

			</td>
		</tr>
		<tr>
			<td>
				<input type="hidden" name='idBolum' value="{{ $bolum -> id}}">
				<input type="hidden" name='derece' value="{{ $birim -> derece}}">
			</td>
			<td> {!! Form::submit('Güncelle') !!}  
			
		@endif
	@endforeach
@endforeach
{!! Form::close() !!}
<a href="{{ URL::previous() }}"> {!! Form::submit('İptal') !!} </a>

@if($errors->any())
<h4>{{$errors->first()}}

<form method="POST" action="/Bologna_Bilgi_Sistemi/public/yonetim/ProgramTanimlari/eklenen-birim-ve-bolumler" > <!-- farklı sayfaya post için-->
	<input name="secim" value="bolum" type="hidden"/>
	<input name="ara" value="{{ $bolum->bolum_adi }}" type="hidden" />
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<input type="submit" value="Güncellenen Veriyi Gör" />
</form>


</h4>
@endif

</td>
</tr>
</table>
</div>


@stop

</body>
</html>