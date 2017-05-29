<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birimler extends Model
{
	protected $table = 'birimler';

	protected $fillable = ['birim_adi', 'derece', 'birim_adi_en', 'derece_adi_en', 'derece_id'];

	protected $hidden = ['id'];

	public function derece($derece_id)
	{
		/*$array_tr=array("Ön Lisans","asdas","asdasd","asdasdad");
		$array_en=array("sort cycle","asdas","asdasd","asdasdad");

		if($dil==0)
			return $array_tr[$this->dereceid];
		else
			return $array_en[$this->dereceid];*/

			$array_secenek=array(trans("derece.onlisans"),trans("derece.lisans"),trans("derece.yukseklisans"),trans("derece.doktora"));

			return $array_secenek[$derece_id];
	}
}