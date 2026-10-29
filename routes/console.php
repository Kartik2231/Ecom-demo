<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('app:status', function () {
    $this->info('Ecom Demo Laravel application is ready.');
})->purpose('Check application status');
