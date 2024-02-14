<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CustomizationLCD;
use Illuminate\Database\Seeder;

class LCDDefault extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = CustomizationLCD::create([
            'logo' => 'DFEC', 
            'location' => 'Brgy. Digkilaan, Dodiongan Falls, Iligan City',
            'phone_number' => '09123456789',
            'email' => 'admin@dfec.com',
            'twitter_link' => 'https://twitter.com',
            'fb_link' => 'https://facebook.com',
            'instagram_link' => 'https://instagram.com',
        ]);
    }
}
