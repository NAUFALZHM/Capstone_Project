<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodSearchController;

Route::get('/search-foods', [FoodSearchController::class, 'search']);
