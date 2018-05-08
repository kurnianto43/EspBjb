<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gdm extends Model
{
    protected $fillable = ['no_asset', 'no_id', 'tipe_id', 'kondisi_id', 'tgl_masuk_wh', 'catatan'];


    public function kondisi()
    {
        return $this->belongsTo('App\Kondisi');
    }

    public function tipe()
    {
    	return $this->belongsTo('App\Tipe');
    }

    public function scopeSearch($query, $s)
    {
    	return $query->where('no_asset', 'like', '%' .$s. '%')->orWhere('no_id', 'like', '%' .$s. '%');
    }


}