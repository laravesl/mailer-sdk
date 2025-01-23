<?php

namespace Laravesl\MailerSdk\MailRP;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MailNE extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('xMail', function ($exUnt) {
            return xMailBIL($exUnt);
        });
    }
}
