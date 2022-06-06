<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllControllers;

Route::get('/countPalindromes', [AllControllers::class, 'countPalindromes'])->name("countPalindromes");
Route::get('/getTime', [AllControllers::class, 'getTime'])->name("getTime");
Route::get('/printText', [AllControllers::class, 'printText'])->name("printText");
Route::get('/setGroups', [AllControllers::class, 'setGroups'])->name("setGroups");
Route::get('/randomNominee', [AllControllers::class, 'randomNominee'])->name("randomNominee");
Route::get('/randomRecipe', [AllControllers::class, 'randomRecipe'])->name("randomRecipe");



