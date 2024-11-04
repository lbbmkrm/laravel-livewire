<?php

use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelCreate;
use App\Livewire\Hotels\HotelList;
use App\Livewire\Hotels\HotelUpdate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/hotels', HotelList::class)->name('hotel.list');
Route::get('/hotels/create', HotelCreate::class)->name('hotel.create');
Route::get('/hotels/{id}/update', HotelUpdate::class)->name('hotel.update');
