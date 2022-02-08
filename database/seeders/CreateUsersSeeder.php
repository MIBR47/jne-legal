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
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
