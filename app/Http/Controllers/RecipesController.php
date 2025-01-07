<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Models\Recipe;


class RecipesController extends Controller
{
    public function show(int $id)
    {
        return view('recipes.show', [
            'recipe' => Recipe::find($id)
        ]);
    }
}
