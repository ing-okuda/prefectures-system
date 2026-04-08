<?php

use App\Http\Controllers\PrefectureController;
Route::get('/prefectures/capital', [PrefectureController::class, 'capital']);