<?php

use Illuminate\Database\Seeder;
use App\Gdm;

class GdmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gdm::create([
        	'no_asset'=>'J003901',
        	'no_id'=>'ID280191817',
        	'tipe_id'=>1,
            'kondisi_id'=>1,
        	'tgl_masuk_wh'=>'2018-01-01',
        	'catatan'=>'tidak ada',
        ]);
    }
}
