<?php

use Illuminate\Database\Seeder;

class KondisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kondisis')->insert([
        	'name' => 'Good',
        ]);
    }
}
