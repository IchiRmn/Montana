<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regists')->insert([
            'registId' => 'P10001',
            'users_id' => '2',
            'hikes_id' => '1',
        ]);
    }
}
