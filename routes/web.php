<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Offices;
use App\Http\Livewire\Officeinfo;
use App\Http\Livewire\Clients;
use App\Http\Livewire\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('offices',Offices::class)->middleware(['auth:sanctum', 'verified'])->name('offices');
Route::get('office/{office_id}',Officeinfo::class)->middleware(['auth:sanctum', 'verified'])->name('office');
Route::get('clients',Clients::class)->middleware(['auth:sanctum', 'verified'])->name('clients');
//prints
Route::get('prints/qr/{client_id}','\App\Http\Controllers\PrintsController@printqr')->middleware(['auth:sanctum', 'verified'])->name('print.qr');
Route::get('prints/slip/{client_id}/{service_id}','\App\Http\Controllers\PrintsController@serviceslip')->middleware(['auth:sanctum', 'verified'])->name('print.serviceslip');

Route::get('dashboard',Dashboard::class)->middleware(['auth:sanctum', 'verified'])->name('dashboard');
