<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    protected $fillable = [
    	'kondisi',
    ];

    public function gdm()
    {
    	return $this->hasOne('App\Gdm');
    }


}
