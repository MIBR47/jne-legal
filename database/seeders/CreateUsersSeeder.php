<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id'=>'USR004',
                'name'=>'Udin',
                'username'=>'udin',
                'role'=>'LEGALLITIGASI1',
                'email'=>'udin@jne.co.id',
                'password'=> bcrypt('udin'),
            ],
            [
                'id'=>'USR005',
                'name'=>'Marko',
                'username'=>'marko',
                'role'=>'LEGALLITIGASI2',
                'email'=>'marko@jne.co.id',
                'password'=> bcrypt('marko'),
            ],
            [
                'id'=>'USR006',
                'name'=>'Komar',
                'username'=>'komar',
                'role'=>'LEGALMANAGER',
                'email'=>'komar@jne.co.id',
                'password'=> bcrypt('komar'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
