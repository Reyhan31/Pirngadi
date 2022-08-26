<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiturProductCartController;
use App\Http\Controllers\FiturProductController;
use App\Http\Controllers\FiturProductDetailsController;
use App\Http\Controllers\EmailController;
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
Route::post('/addCart', [FiturProductCartController::class, 'addCart']);
Route::post('/minqty', [FiturProductCartController::class, 'minQty']);
Route::post('/plusqty', [FiturProductCartController::class, 'plusQty']);

Route::get('/product/{category}', [FiturProductController::class, 'index']);
Route::post('/search', [FiturProductController::class, 'filter']);

Route::get('/fiturproductdetails/{id}', [FiturProductDetailsController::class, 'index']);

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

Route::get('/manageappndev', function () {
    return view('manageappndev');
});

Route::get('/managedesktop', function () {
    return view('managedesktop');
});

Route::get('/manageinfrastructure', function () {
    return view('manageinfrastructure');
});

Route::get('/manageondemandtest', function () {
    return view('manageondemandtest');
});

Route::get('/manageprint', function () {
    return view('manageprint');
});

Route::get('/manageprovider', function () {
    return view('manageprovider');
});

Route::get('/manageservice', function () {
    return view('manageservice');
});

Route::get('/modernworkspaceandadop', function () {
    return view('modernworkspaceandadop');
});

Route::get('/oracletohadoop', function () {
    return view('oracletohadoop');
});

Route::get('/productconductorexp', function () {
    return view('productconductorexp');
});

Route::get('/sapdataoffload', function () {
    return view('sapdataoffload');
});

Route::get('/securityconsulting', function () {
    return view('securityconsulting');
});

Route::get('/securityinfo', function () {
    return view('securityinfo');
});

Route::get('/securitymanage', function () {
    return view('securitymanage');
});

Route::get('/securityperimeter', function () {
    return view('securityperimeter');
});

Route::get('/securityservice', function () {
    return view('securityservice');
});

Route::get('/securityuser', function () {
    return view('securityuser');
});

// Route::get('/send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('reyhan.nathanael@yahoo.com')->send(new \App\Mail\sendMail($details));
   
//     dd("Email is Sent.");
// });

Route::post('/send-mail', [EmailController::class, 'index']);
Route::post('/send-mail-contact', [EmailController::class, 'email']);