<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([

            'name'=>'user',
            'email'=>'user@user.com',
            'password'=>Hash::make('seoera123'),
            'image'=>'userimage/avataaars.png',
            'phone'=>'123456789',
            'language_id'=>1,
            'address'=>'cairo',
            'created_by'=>'admin',
        ]);

    }
}
