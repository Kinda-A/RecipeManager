<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect root to recipe list
Route::get('/', function () {
    return redirect()->route('recipes.index');
});

// --- Demo login/logout routes ---
Route::get('/login-demo', function (Request $request) {
    $request->session()->put('logged_in', true);
    return redirect('/recipes')->with('success', 'Demo login successful!');
});

Route::get('/logout-demo', function (Request $request) {
    $request->session()->forget('logged_in');
    return redirect('/recipes')->with('success', 'Demo logout successful!');
});

// --- Public routes (anyone can access) ---
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

// --- Protected routes (only demo logged-in user) ---
Route::middleware('demo.auth')->group(function () {
    // Create & store new recipe
    Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');

    // Edit, update, delete existing recipe
    Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
    Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
});