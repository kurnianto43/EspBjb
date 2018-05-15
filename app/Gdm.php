<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gdm extends Model
{
    protected $fillable = ['no_asset', 'no_id', 'tipe_id', 'kondisi_id', 'tgl_masuk_wh', 'catatan', 'foto_gdm'];


    public function kondisi()
    {
        return $this->belongsTo('App\Kondisi');
    }

    public function tipe()
    {
    	return $this->belongsTo('App\Tipe');
    }


}