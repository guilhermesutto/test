<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AreasController;

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
Route::redirect('/', '/login');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::any('/dashboard', [PagesController::class, 'dashboard'])->middleware(['auth']);
Route::any('/testeIndex', [PagesController::class, 'getIndex'])->middleware(['auth']);

//Areas
Route::any('/areas', [AreasController::class, 'getIndex'])->middleware(['auth']);
Route::any('/areas/form/{id?}', [AreasController::class, 'getForm'])->middleware(['auth']);
require __DIR__.'/auth.php';
