<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title'=>'SeoEra',
            'description'=>'SeoEra',
            'email'=>'info@seoera.com',
            'phone'=>'01068408586',
            'location'=>'Cairo , Egypt',
            'logo'=>'images/logo.png',
            'icon'=>'images/favicon.ico',
            'link'=>'https://www.seoera.net/',
            'facebook'=>'https://www.facebook.com/SeoEra.Net/',
        ]);

    }
}

