<?php

use Illuminate\Database\Seeder;
use App\Tipe;
class TipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipe::insert([
        	['name'=>'M080'],
        ]);
    }
}
