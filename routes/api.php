<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Api\IndexController;

Route::get('/',[IndexController::class,'index']);
Route::post('/Alunos',[IndexController::class,'store']);
