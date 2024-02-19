<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizFormController;



Route::resource('quizforms', QuizformController::class);
