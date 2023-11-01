<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Person;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
    });
Route::get('/relation', [AuthorController::class, 'relate']);
Route::get('/softdelete', function () {
    Person::find(1)->delete();
    });
Route::get('/softdelete', function () {
    Person::find(1)->delete();
    });
Route::get('softdelete/store', function() {
    $result = Person::onlyTrashed()->restore();
    echo $result;
    });
Route::get('softdelete/absolute', function() {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
    });