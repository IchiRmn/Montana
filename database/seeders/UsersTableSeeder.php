<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'role_id' => '1',
            'password' => Hash::make('admin1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'User@gmail.com',
            'role_id' => '2',
            'password' => Hash::make('user1234'),
        ]);
    }
}
