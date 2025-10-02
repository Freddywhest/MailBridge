<?php

use App\Livewire\DigitalOceanMail;
use App\Livewire\GoogleMail;
use Illuminate\Support\Facades\Route;

Route::get('/', GoogleMail::class)->name('google');
Route::get('/digitalocean', DigitalOceanMail::class)->name('digitalocean');
