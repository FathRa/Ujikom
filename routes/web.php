<?php

use App\Http\Controllers\{PaymentController, ProfileController, RegisterStepTwoController};
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'registration_completed'], function (){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::get('register-step2', [RegisterStepTwoController::class, 'create']);
    Route::post('register-step2', [RegisterStepTwoController::class, 'store'])->name('register-step2');

    //Payment
    Route::resource('payments', PaymentController::class);
    Route::get('payments.create-2/{id}', [PaymentController::class, 'create2'])->name('payments.create-2');
    Route::put('payments.create-2/{id}', [PaymentController::class, 'store2'])->name('payments.store-2');

    Route::get('profile.create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::put('profile.store', [ProfileController::class, 'store']);
});

require __DIR__.'/auth.php';
