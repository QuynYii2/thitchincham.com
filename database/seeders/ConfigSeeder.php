<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $img = asset('assets/img/logo.png');
        $config = [
            'hotline' => '0988988988',
            'logo' => $img,
            'cskh' => '0989886886',
            'facebook' => 'https://www.facebook.com/',
            'zalo' => 'https://zalo.me/pc',
        ];

        Config::create($config);
    }
}
