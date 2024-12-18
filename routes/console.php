<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\artisan;

artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
