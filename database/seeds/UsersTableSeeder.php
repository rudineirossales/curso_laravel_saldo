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
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'Outro Usuário',
            'email' => 'contato@gmail.com',
            'password' => bcrypt('123456'),
            ]);
        }
}   
