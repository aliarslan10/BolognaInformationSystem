<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bolumler extends Model
{
    protected $table = "bolumler";

    protected $fillable = ['bolum_adi', 'bolum_adi_en', 'birim_id', 'durum', 'bolum_adi_link'];

	protected $hidden = ['id'];
}
