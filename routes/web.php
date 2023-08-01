<?php

use App\Http\Livewire\Admin\AddDevice;
use App\Http\Livewire\Admin\AddDeviceTemplate;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Devices;
use App\Http\Livewire\Admin\DeviceTemplates;
use App\Http\Livewire\Admin\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Dashboard::class);
Route::get('/add-device', AddDevice::class);
Route::get('/devices', Devices::class);
Route::get('/add-device-template', AddDeviceTemplate::class);
Route::get('/device-templates', DeviceTemplates::class);
Route::get('/users', Users::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
