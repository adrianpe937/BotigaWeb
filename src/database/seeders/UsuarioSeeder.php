<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'username' => 'John Doe',
            'numero' => '123456789',
            'email' => 'johndoe@example.com',
            'password' => 'johndoe'
        ]);
    }
}
