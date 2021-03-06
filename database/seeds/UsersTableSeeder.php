<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'name' => 'Stephen Vinuya',
            'email' => 'stephen.vinuya@gmail.com',
            'password' => Hash::make('09758271594')
        ]);
    }
}
