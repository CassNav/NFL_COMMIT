<?php

use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        // Assuming 4 divisions per conference (AFC and NFC), total 8 divisions
        $divisions = [
            ['name' => 'AFC North', 'super_bowl_titles' => 0],
            ['name' => 'AFC South', 'super_bowl_titles' => 0],
            ['name' => 'AFC West', 'super_bowl_titles' => 0],
            ['name' => 'AFC East', 'super_bowl_titles' => 0],
            ['name' => 'NFC North', 'super_bowl_titles' => 0],
            ['name' => 'NFC South', 'super_bowl_titles' => 0],
            ['name' => 'NFC West', 'super_bowl_titles' => 0],
            ['name' => 'NFC East', 'super_bowl_titles' => 0],
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}
