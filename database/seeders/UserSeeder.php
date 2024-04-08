<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'tanaka',
            'email'=>'user@user.com',
            'password'=>Hash::make('password123'),
            'created_at'=>'2024/04/05 05:00:00'
        ]);
    }
}
