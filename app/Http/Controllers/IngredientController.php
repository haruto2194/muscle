<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function cook(Ingredient $ingredient)
    {
        return view('muscle/detail')->with(['ingredients' => $ingredient->recipe()]);
    }
}
