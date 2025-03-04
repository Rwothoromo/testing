<?php

use Illuminate\Database\Seeder;
use Database\Seeders\LinkSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            LinkSeeder::class,
        ]);
    }
}
