<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('socials')->insert([
            'social_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('socials')->insert([
            'social_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('socials')->insert([
            'social_id' => 3,
            'user_id' => 1,
        ]);
        
    }
}
