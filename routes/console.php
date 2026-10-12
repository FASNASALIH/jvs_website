<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('jvs:about', function () {
    $this->info("JVS - Jyoshna's Versatile Stability website (Laravel + Blade)");
})->purpose('Show what this application is');
