<?php

namespace Database\Seeders;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theater_member')->delete();

        User::create([
            'name' => 'Tony',
            'email'    => 'tonyc@mail.com',
            'password' => Hash::make('password'),
            'phone' => '0911111111',
        ]);
    }
}
