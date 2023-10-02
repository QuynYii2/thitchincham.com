<?php

namespace Database\Seeders;

use App\Models\MailConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'MAIL_DRIVER',
                'value' => 'smtp',
                'type' => 'smtp_email'
            ],
            [
                'name' => 'MAIL_HOST',
                'value' => 'smtp.gmail.com',
                'type' => 'smtp_email'
            ],
            [
                'name' => 'MAIL_PORT',
                'value' => '587',
                'type' => 'smtp_email'
            ],
            [
                'name' => 'MAIL_USERNAME',
                'value' => 'bigcorn2003@gmail.com',
                'type' => 'smtp_email'
            ],
            [
                'name' => 'MAIL_PASSWORD',
                'value' => 'uvypdvcajjybknnh',
                'type' => 'smtp_email'
            ],
            [
                'name' => 'MAIL_ENCRYPTION',
                'value' => 'tls',
                'type' => 'smtp_email'
            ]
        ];
        foreach ($items as $item) {
            MailConfig::create($item);
        }
    }
}
