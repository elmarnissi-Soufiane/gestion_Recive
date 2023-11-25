<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function index()
    {
        return Recipe::select('id','name','ingredients','steps', 'preparation_time')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'preparation_time' => 'required|integer',
        ]);

        Recipe::create($request->post());

        return response()->json([
            'message' => 'New recipe added successfully'
        ]);
    }

    public function show(Recipe $recipe)
    {
        return response()->json([
            'recipe' => $recipe
        ]);
    }

    public function update(Request $request, Recipe $recipe)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
            'preparation_time' => 'required|integer',
        ]);

        $recipe->update($validatedData);

        return response()->json([
            'message' => 'Recipe updated successfully'
        ]);
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return response()->json([
            'message' => 'Recipe deleted successfully'
        ]);
    }

}
