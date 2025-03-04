<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use App\Models\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // To seed just 1 record
        // DB::table('links')->insert([
        //     'title' => Str::random(10),
        //     'url' => Str::random(10).'.com',
        //     'description' => Str::random(100),
        // ]);

        Link::factory()->count(10)->create(); // Create 10 links and add to db
    }
}
