<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/', [CrudController::class, 'index'])->name('index');
Route::match(['get','post'], '/create', [CrudController::class, 'create'])->name('create');
Route::match(['get','put'], '/products/{product}', [CrudController::class, 'update'])->name('update');
Route::delete('/delete/{product}', [CrudController::class, 'delete'])->name('delete');
