<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // Display all recipes
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    // Show form to create recipe
    public function create()
    {
        return view('recipes.create');
    }

    // Store new recipe
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        Recipe::create($request->all());

        return redirect()->route('recipes.index')
                         ->with('success', 'Recipe added successfully!');
    }

    // Show single recipe
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    // Show edit form
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    // Update recipe
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        $recipe->update($request->all());

        return redirect()->route('recipes.index')
                         ->with('success', 'Recipe updated successfully!');
    }

    // Delete recipe
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index')
                         ->with('success', 'Recipe deleted successfully!');
    }
}
