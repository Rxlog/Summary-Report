<?php

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
    return redirect(route('summary-report'));
});

Auth::routes();

Route::middleware('auth')->prefix('reports')->group(function () {
    Route::get('/', 'SummaryReportController')->name('summary-report');
    Route::get('/reservation', 'ReservationReportController')->name('reservation-report');
    Route::get('/registration', 'RegistrationReportController')->name('registration-report');
});
