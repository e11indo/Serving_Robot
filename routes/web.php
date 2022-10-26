<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

Route::get('/', [BoardController::class, 'index']) -> name('boards.index');
Route::get('view', [BoardController::class, 'view']) -> name('boards.view');
Route::post('boards', [BoardController::class, 'store']) -> name('boards.store');

Route::get('view/{board}', [BoardController::class, 'show']) -> name('boards.show');
Route::delete('boards/{board}', [BoardController::class, 'delete']) -> name('boards.delete');
