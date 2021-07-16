<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'regists_id' => 'P10001',
            'identity' => '555566666',
            'member_email' => 'riri@gmail.com',
            'phone' => '085522561546',
            'member_name' => 'Riri',
            'birthdate' => '08-05-2001',
            'gender' => 'Female',
            'address' => 'Kota Jakarta'
        ]);
        DB::table('members')->insert([
            'regists_id' => 'P10001',
            'identity' => '66666555555',
            'member_email' => 'ruru@gmail.com',
            'phone' => '088899946',
            'member_name' => 'Ruru',
            'birthdate' => '12-11-2000',
            'gender' => 'Female',
            'address' => 'Kota Jakarta'
        ]);
    }
}
