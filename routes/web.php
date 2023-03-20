<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
    return redirect()->route('dashboard');
});


Route::get('optimize',function (){
    Artisan::call('optimize', ['--quiet' => true]);
    Artisan::call('cache:clear', ['--quiet' => true]);
    Artisan::call('route:clear', ['--quiet' => true]);
    Artisan::call('config:clear', ['--quiet' => true]);
    Artisan::call('view:clear', ['--quiet' => true]);
    return redirect()->back();
});
