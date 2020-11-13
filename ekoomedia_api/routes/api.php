<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('leads', [LeadController::class,'index']);
Route::get('leads/{lead}', [LeadController::class,'show']);
Route::post('leads', [LeadController::class,'store']);
Route::delete('leads/{lead}', [LeadController::class,'delete']);
