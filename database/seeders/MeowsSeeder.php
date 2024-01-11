<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

 use .\MeowsSeeder;
 use .\UserSeeder;


class MeowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meows')->insert([
            'content' => Str::random(75),
            'creation_date'  => \Carbon\Carbon::now(),
            'modification_date' => \Carbon\Carbon::now(),
            'user_id' => null
        ]);
    }
}
