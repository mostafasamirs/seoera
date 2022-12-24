<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'title'=>'English',
            'image'=>'languages/en.png',
            'slogan'=>'en',
        ]);
        Language::create([
            'title'=>'Spain',
            'image'=>'languages/sp.svg',
            'slogan'=>'sp',
        ]);
        Language::create([
            'title'=>'Arabic',
            'image'=>'languages/ar.jpg',
            'slogan'=>'ar',
        ]);
    }
}
