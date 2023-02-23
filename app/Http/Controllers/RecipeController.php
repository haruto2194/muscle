<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Ingredient;


class RecipeController extends Controller
{
    public function index(Recipe $recipe)
    {
        return view('muscle/home')->with(['recipes' => $recipe->getPaginateByLimit(2)]);
    }
    
    public function detail(Recipe $recipe)
    {
        $ingredients=Ingredient::where('recipe_id','=',$recipe->id);
        return view('muscle/detail')->with(['recipe' => $recipe,'ingredients'=>$ingredients->get()]);
    }
    
    public function create()
    {
        return view('muscle/create');
    }

    public function store(Request $request, Recipe $recipe){
        $input_recipe=$request['recipe'];
        $recipe->fill($input_recipe)->save();
        return redirect('/recipes/' . $recipe->id);
        
        
    }
}