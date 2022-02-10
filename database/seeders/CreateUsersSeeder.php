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
                'id'=>'USR001',
                'name'=>'Admin',
                'username'=>'admin',
                'role'=>'ADMIN',
                'email'=>'admin@jne.co.id',
                'password'=> bcrypt('admin'),
            ],
            [
                'id'=>'USR002',
                'name'=>'Joko',
                'username'=>'joko',
                'role'=>'USER',
                'email'=>'joko@jne.co.id',
                'password'=> bcrypt('joko'),
            ],
            [
                'id'=>'USR003',
                'name'=>'Nanang',
                'username'=>'nanang',
                'role'=>'LEGALPERMIT',
                'email'=>'nanang@jne.co.id',
                'password'=> bcrypt('nanang'),
            ],
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
            [
                'id'=>'USR007',
                'name'=>'Isfan',
                'username'=>'isfan',
                'role'=>'TEAMCS',
                'email'=>'isfan@jne.co.id',
                'password'=> bcrypt('isfan'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
