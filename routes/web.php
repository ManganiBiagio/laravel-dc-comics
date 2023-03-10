<?php

use App\Http\Controllers\ComicsController;
use App\Http\Controllers\PageController;
use App\Models\Comic;
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

Route::get('/', [PageController::class,"index"]);

Route::get("/comics",[ComicsController::class,"index"])->name("comics.index");

Route::get("comics/create",[ComicsController::class,"create"])->name("comics.create");

Route::get("/comics/{comic}",[ComicsController::class,"show"])->name("comics.show");

Route::post("/comics",[ComicsController::class,"store"])->name("comics.store");

Route::get("/comics/{comic}/edit", [ComicsController::class, "edit"])->name("comics.edit");

Route::put("/comics/{comic}", [ComicsController::class, "update"])->name("comics.update");

Route::delete("/comics/{comic}", [ComicsController::class, "destroy"])->name("comics.destroy");