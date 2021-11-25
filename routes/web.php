<?php

use App\Http\Controllers\CategoryController;
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

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, "index"])->name("categories.list");
    Route::get('/create', [CategoryController::class, "create"])->name("categories.create");
    Route::post('/create', [CategoryController::class, "store"])->name("categories.store");
    Route::get('/{id}/detail',[CategoryController::class, "show"])->name("categories.detail");
    Route::get('/{id}/delete',[CategoryController::class, "destroy"])->name("categories.delete");
    Route::get('/{id}/update',[CategoryController::class, "edit"])->name("categories.edit");
    Route::post('/{id}/update',[CategoryController::class,"update"])->name("categories.update");
});
