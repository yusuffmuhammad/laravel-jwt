<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'                => 'User',
            'password'            => Hash::make('asdf890'),
            'email'               => 'user@example.com',
        ]);
    }
}
