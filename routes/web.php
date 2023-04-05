<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\newslettercontroller;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\DashboardController;

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



Route::get('/',[HomeController::class, 'index'])->name('homaPage');
Route::post('/send_message',[HomeController::class, 'storeMessage'])->name('sendMessage');
Route::post('/suscribe',[HomeController::class, 'storeEmail'])->name('suscriber');
Route::get('/service_detail/{id}/show',[HomeController::class, 'show_service'])->name('service.detail');




Route::middleware(['auth'])->group(function(){
        
        Route::get('/admin/dashboard',[DashboardController::class, 'index']);
        Route::get('/admin/contacts',[DashboardController::class, 'messages'])->name('admin.message');
        Route::get('/admin/newsletters',[DashboardController::class, 'newsletterSucribers'])->name('admin.newsletter');
        Route::resource('admin/services',ServicesController::class);


   
    });
    


require __DIR__.'/auth.php';
