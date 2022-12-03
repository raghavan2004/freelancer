<?php

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

// Route::get('/listinvoice', function () {
//     return view('listinvoice');
// });

Route::get('createticket', function () {
    return view('support/createticket');
});

Route::get('listticket', function () {
    return view('support/listticket');
});

Route::get('listinvoice', function () {
    return view('invoice/listinvoice');
});
Route::get('createinvoice', function () {
    return view('invoice/createinvoice');
});

Route::get('viewinvoice', function () {
    return view('invoice/viewinvoice');
});

Route::get('createproject', function () {
    return view('project/createproject');
});

Route::get('listproject', function () {
    return view('project/listproject');
});

Route::get('projectdetails', function () {
    return view('project/projectdetails');
});

Route::get('listcontract', function () {
    return view('contract/listcontract');
});

Route::get('listcontract', function () {
    return view('contract/listcontract');
});

Route::get('support', function () {
    return view('support/listticket');
});

Route::get('support', function () {
    return view('support/createticket');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('2fa');

Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');

Route::post('2fa', [App\Http\Controllers\TwoFAController::class, 'store'])->name('2fa.post');

Route::get('2fa/reset', [App\Http\Controllers\TwoFAController::class, 'resend'])->name('2fa.resend');
