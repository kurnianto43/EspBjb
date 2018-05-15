<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = ['no_part', 'nama_part', 'qty', 'tgl_terima', 'catatan', 'foto_spp'];
}
