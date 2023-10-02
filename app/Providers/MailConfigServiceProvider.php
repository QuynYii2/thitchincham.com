<?php

namespace App\Providers;

use App\Models\MailConfig;
use Illuminate\Support\Facades\Config as LaravelConfig;
use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $mailConfigs = MailConfig::whereIn('name', [
            'MAIL_DRIVER', 'MAIL_HOST', 'MAIL_PORT', 'MAIL_USERNAME', 'MAIL_PASSWORD', 'MAIL_ENCRYPTION'
        ])->where('type', 'smtp_email')->get();

        $mailerSettings = [];

        foreach ($mailConfigs as $config) {
            $mailerSettings[$config->name] = $config->value;
        }

        $mailerSettings = array_merge([
            'MAIL_DRIVER' => 'smtp',
            'MAIL_HOST' => 'smtp',
            'MAIL_PORT' => '587',
            'MAIL_ENCRYPTION' => 'tls',
            'MAIL_USERNAME' => 'example@gmail.com',
            'MAIL_PASSWORD' => '123456',
        ], $mailerSettings);

        LaravelConfig::set('mail.mailers.smtp', [
            'transport' => $mailerSettings['MAIL_DRIVER'],
            'host' => $mailerSettings['MAIL_HOST'],
            'port' => $mailerSettings['MAIL_PORT'],
            'encryption' => $mailerSettings['MAIL_ENCRYPTION'],
            'username' => $mailerSettings['MAIL_USERNAME'],
            'password' => $mailerSettings['MAIL_PASSWORD'],
        ]);
    }
}
