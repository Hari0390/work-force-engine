<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkProviderController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ApiController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/home/profile/edit', [App\Http\Controllers\HomeController::class, 'store'])->name('profile-store');

Route::get('/workprovider/replayview/{id}', [WorkProviderController::class, 'replayview'])->name('replayview');
Route::post('/workprovider/replaystore/{id}', [WorkProviderController::class, 'replaystore'])->name('replaystore');
//Route::get('/workprovider/vaccancyview', [WorkProviderController::class, 'vaccancyview'])->name('vaccancyview');
Route::get('/workprovider/deletevaccancy/{id}', [WorkProviderController::class, 'remove'])->name('delete_vaccancy');

Route::resource('/workprovider',WorkProviderController::class);

Route::get('/worker/display_requestform/{id}', [WorkerController::class, 'display_requestform'])->name('worker_display_requestform');
Route::post('/worker/store_requestform/{id}', [WorkerController::class, 'store_requestform'])->name('worker_store_requestform');
Route::get('/worker/viewreplay', [WorkerController::class, 'viewreplay'])->name('viewreplay');
Route::resource('/worker', WorkerController::class);

Route::get('/admin/workerlist', [AdminController::class, 'workerlist'])->name('workerlist');
Route::get('/admin/workerlistview', [AdminController::class, 'workerlistview'])->name('workerlistview');
Route::post('/admin/workerdetails/', [AdminController::class, 'workersort']);
Route::resource('/admin', AdminController::class);


Route::resource('/calculator', CalculatorController::class);

Route::get('/vendoraddform', [ApiController::class, 'vendoraddform'])->name('vendor_addform');
Route::get('/vendorcreate', [ApiController::class, 'vendorcreate'])->name('vendor_create');


