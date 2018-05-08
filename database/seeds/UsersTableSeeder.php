<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'=>1,
            'active'=>1,
        	'name'=>'Yanuar Kurnianto',
        	'username'=>'kurnianto43',
        	'email'=>'yanuarkurnianto1@gmail.com',
        	'password'=>bcrypt('indonesia1993'),
        	'remember_token'=>str_random(10),
        ]);

    }
}
