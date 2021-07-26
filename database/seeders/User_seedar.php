<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class User_seedar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('users')->insert([
            'name'=>'tushar shrivastav',
            'email'=>"ts3657@gmail.com",
            "password"=>Hash::make('12345'),
        ]);
    }
}
