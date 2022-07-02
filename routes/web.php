<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiturProductCartController;
use App\Http\Controllers\FiturProductController;
use App\Http\Controllers\FiturProductDetailsController;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bigdatananalytcons', function () {
    return view('bigdatananalytcons');
});

Route::get('/bigdataservice', function () {
    return view('bigdataservice');
});

Route::get('/businessapp', function () {
    return view('businessapp');
});

Route::get('/businessappcrm', function () {
    return view('businessappcrm');
});

Route::get('/businessappcustjourney', function () {
    return view('businessappcustjourney');
});

Route::get('/businessappenterprise', function () {
    return view('businessappenterprise');
});

Route::get('/businessappmanageservice', function () {
    return view('businessappmanageservice');
});

Route::get('/businessappprocess', function () {
    return view('businessappprocess');
});

Route::get('/cloudmigrationnprov', function () {
    return view('cloudmigrationnprov');
});

Route::get('/cloudservice', function () {
    return view('cloudservice');
});

Route::get('/consuladvisory', function () {
    return view('consuladvisory');
});

Route::get('/consulfinance', function () {
    return view('consulfinance');
});

Route::get('/consultingservice', function () {
    return view('consultingservice');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/digitalworkspace', function () {
    return view('digitalworkspace');
});

Route::get('/dwenterprisemob', function () {
    return view('dwenterprisemob');
});

Route::get('/dwmodernworkplace', function () {
    return view('dwmodernworkplace');
});

Route::get('/dwvirtualizedapp', function () {
    return view('dwvirtualizedapp');
});

Route::get('/fiturproductcart', [FiturProductCartController::class, 'index']);

Route::get('/fiturproduct', [FiturProductController::class, 'index']);

Route::get('/fiturproductdetails', [FiturProductDetailsController::class, 'index']);

Route::get('/hitbackup', function () {
    return view('hitbackup');
});

Route::get('/hitinfrastructure', function () {
    return view('hitinfrastructure');
});

Route::get('/hitinfrastructureauto', function () {
    return view('hitinfrastructureauto');
});

Route::get('/hitsmartoperation', function () {
    return view('hitsmartoperation');
});

Route::get('/hitvirtuallization', function () {
    return view('hitvirtuallization');
});