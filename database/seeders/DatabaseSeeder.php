<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MountainSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(RegistSeeder::class);
        $this->call(HikeSeeder::class);
    }
}
