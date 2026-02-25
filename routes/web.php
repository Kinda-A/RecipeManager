


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return redirect()->route('recipes.index');
});

// Resourceful route for all CRUD operations
Route::resource('recipes', RecipeController::class);