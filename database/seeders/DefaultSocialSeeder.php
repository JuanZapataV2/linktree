<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DefaultSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('default_socials')->insert([
            'name' => 'YouTube',
            'image' => 'youtube.png',
        ]);

        DB::table('default_socials')->insert([
            'name' => 'Twitter',
            'image' => 'twitter.png',
        ]);

        DB::table('default_socials')->insert([
            'name' => 'Instagram',
            'image' => 'instagram.png',
        ]);

        DB::table('default_socials')->insert([
            'name' => 'Facebook',
            'image' => 'facebook.png',
        ]);

        DB::table('default_socials')->insert([
            'name' => 'WhatsApp',
            'image' => 'whatsapp.png',
        ]);
        DB::table('default_socials')->insert([
            'name' => 'Spotify',
            'image' => 'spotify.png',
        ]);
    }
}
