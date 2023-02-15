<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index(Ingredient $ingredient)
    {
        return $ingredient->get();
    }
}
