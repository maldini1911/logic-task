<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'            => 'islam adel',
            'username'        => 'islam',
            'mobile'          => '123456789',
            'email'           => 'islam@admin.com',
            'password'        => Hash::make(123456),
        ]);
    }
}
