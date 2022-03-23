<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PearsonController;

Route::get('/pearson', [PearsonController::class,'index' ]);

Route::post('/pearson',[PearsonController::class, 'store']);

Route::get('/pearson/{id}',[PearsonController::class, 'show'])->where('id','[0-9]+');

Route::put('/pearson/{id}',[PearsonController::class, 'update'])->where('id','[0-9]+');
    
Route::delete('/pearson/{id}',[PearsonController::class, 'destroy'])->where('id','[0-9]+');
