<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Pages
Route::get('/', [PagesController::class, 'index']);
Route::get('company-profile', [PagesController::class, 'company']);
Route::get('contact-us', [PagesController::class, 'contact']);
Route::get('certificates', [PagesController::class, 'certification']);
Route::get('events', [PagesController::class, 'events']);
Route::get('our-journey', [PagesController::class, 'journey']);


// Product
Route::get('inverter-batteries', [PagesController::class, 'inverter']);
Route::get('inverter-battery/{id}', [PagesController::class, 'inverterbat'])->name('inverter-battery');

Route::get('automotive-batteries', [PagesController::class, 'automotive']);
Route::get('automotive-battery/{id}', [PagesController::class, 'autobat'])->name('automotive-battery');

Route::get('solar-batteries', [PagesController::class, 'solar']);
Route::get('solar-battery/{id}', [PagesController::class, 'solarbat'])->name('solar-battery');

Route::get('e-rickshaw-batteries', [PagesController::class, 'erickshaw']);
Route::get('e-rickshaw-battery/{id}', [PagesController::class, 'erickbatt'])->name('e-rickshaw-battery');

Route::get('lithium-batteries', [PagesController::class, 'lithium']);
Route::get('lithium-battery/{id}', [PagesController::class, 'lithiumbatt'])->name('lithium-battery');

// Country
Route::get('afghanistan', [PagesController::class, 'afghanistan']);
Route::get('dubai', [PagesController::class, 'dubai']);
Route::get('nigeria', [PagesController::class, 'nigeria']);
Route::get('lebanon', [PagesController::class, 'lebanon']);
Route::get('nepal', [PagesController::class, 'nepal']);
Route::get('yemen', [PagesController::class, 'yemen']);

// Landing Page
Route::get('willard/', [PagesController::class, 'willard']);
Route::get('hawker/', [PagesController::class, 'hawker']);
Route::get('pace-setter/', [PagesController::class, 'pacesetter']);
Route::get('power-xl/', [PagesController::class, 'powerxl']);
Route::get('road-master/', [PagesController::class, 'roadmaster']);

// Load Calculator
Route::get('loadcalculator/', [PagesController::class, 'loardcalc']);

Route::group(['prefix'=> 'admin', 'middleware' => ['auth']], function(){
    Route::resource('product', ProductController::class);
});
