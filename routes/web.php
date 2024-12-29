<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('frontend.pages.home.index');
//});
Route::get('/',[HomeController::class,'home'])->name('home') ;
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/shop-detail',[HomeController::class,'shopDetail'])->name('shop-detail');
Route::get('/pricing',[HomeController::class,'pricing'])->name('pricing');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog-detail',[HomeController::class,'blogDetail'])->name('blog-detail');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/booking',[HomeController::class,'appointment'])->name('booking');
Route::get('/service-detail',[HomeController::class,'serviceDetail'])->name('service-detail');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/faqs',[HomeController::class,'faqs'])->name('faqs');
Route::get('/error',[HomeController::class,'error'])->name('error');

 Route::middleware(['auth', 'verified'])->group(function () {
     Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
     Route::resource('service', ServiceController::class);
     Route::resource('appointments', AppointmentController::class);
     Route::resource('patient', PatientController::class);
     Route::resource('client', ClientController::class);
     Route::resource('invoice', InvoiceController::class);
     Route::resource('prescription', PrescriptionController::class);
     Route::resource('inventory-items', InventoryController::class);
 });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
