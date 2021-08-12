<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotas')->insert([
            'mount_id' => '3',
            'quota' => '248',
            'quota_date' => '2021-08-18',
        ]);
    }
}
