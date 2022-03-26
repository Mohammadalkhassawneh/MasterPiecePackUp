<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userData = [
            [
               'name'=>'Admin',
               'email'=>'johndoe@hotmail.com',
                'role_type'=>'admin',
               'password'=> bcrypt('07070707'),
            ],
            [
               'name'=>'Regular User',
               'email'=>'reguser@gmail.com',
                'role_type'=>'admin',
               'password'=> bcrypt('07070707'),
            ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
