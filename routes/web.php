<?php

use App\Http\Controllers\WhateverController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list-participants/{convention}', [WhateverController::class, 'listParticipants']);
Route::get('/attended/{memberId}', [WhateverController::class, 'attended']);
