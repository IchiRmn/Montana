<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hikes')->insert([
            'mountains_id' => '1',
            'date_start' => '20-08-2021',
            'date_end' => '20-09-2021',
        ]);
    }
}
