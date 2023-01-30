<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @returnvoid
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'peter parker',
            'email' => 'peter@parker.com',
            'password' => Hash::make('12345')
        ]);
    }
}
