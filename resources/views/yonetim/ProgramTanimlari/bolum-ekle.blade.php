@extends('yonetim/master_yonetim')

@section('page_header')
	Program Tanımları
@stop

@section('sayfa_aciklamasi')
	- Yeni Bölüm Ekleme Paneli
@stop

@section('icerik_yonetim')

<!-- doktora ve yüksek lisans içerikleri aynı olduğu için her ikisinin de value değeri : 2 -->
<table border="0">
	<tr><th colspan="2"><u> Yeni Bölüm Ekle </u></th></tr>
	{!! Form::open(['route' => 'bolumekle']) !!}

	<tr>
		<td> Bölüm Adı </td>
		<td> {!! Form::text('bolum_adi', null, ['size' => '53x5'] ) !!} </td>
		{!! Form::hidden('durum','1') !!}
	</tr>

	<tr>
		<td> İngilizce Adı </td>
		<td> {!! Form::text('bolum_adi_en', null, ['size' => '53x5'] ) !!} </td>
	</tr> 


	<tr>
		<td> Birim Seçin </td><td>
	 <select name="birim_id">
	    @foreach($birimler as $birim)
	      <option value="{{$birim->id}}"> {{$birim->derece}} - {{$birim->birim_adi}} </option>
	    @endforeach
	  </select>
	</td></tr>

	<td></td><td>
		{!! Form::submit('Kaydet') !!}


	{!! Form::close() !!}

    <a href="/Bologna_Bilgi_Sistemi/public/yonetim/program-tanimlari"> {!! Form::submit('İptal')!!} </a>
</table>
	@if(Session::has('mesaj_eklendi'))
	</td>
	<script type="text/javascript">
		alert("{{Session::get('mesaj_eklendi')}}");
	</script>

	@endif



@stop

</body>
</html>