<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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
        $user = User::where('email', 'anup@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name ="Anup Roy";
            $user->email ="anup@gmail.com";
            // $user->phone ="01732955937";
            $user->password =Hash::make('123');
            $user->save();
        }
    }
}
