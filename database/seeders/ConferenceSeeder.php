<?php

use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    public function run()
    {
        Conference::create([
            'name' => 'AFC',
            'logo' => 'afc_logo.png', // Provide a path to the logo image
            'super_bowl_titles' => 0, // Initial titles count
        ]);

        Conference::create([
            'name' => 'NFC',
            'logo' => 'nfc_logo.png', // Provide a path to the logo image
            'super_bowl_titles' => 0, // Initial titles count
        ]);
    }
}

