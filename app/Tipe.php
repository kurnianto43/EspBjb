<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $fillable = ['tipe',];

    public function gdm()
    {
    	return $this->hasOne('App\Gdm');
    }
}
