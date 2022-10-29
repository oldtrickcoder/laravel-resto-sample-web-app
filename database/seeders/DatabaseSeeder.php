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
        $this->call(daftar_meja_seed ::class);
        $this->call(MenuSeeder::class);
        $this->call(usersSeeder::class);
    }
}
