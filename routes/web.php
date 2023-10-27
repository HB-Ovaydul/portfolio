<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolio\PortfoiloController;

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

Route::get('/',[PortfoiloController::class,'home']);
Route::get('/exprience',[PortfoiloController::class,'workExprience']);
Route::get('/project',[PortfoiloController::class,'project']);
Route::get('/single-page{id}',[PortfoiloController::class,'singlePage'])->name('single.page');


