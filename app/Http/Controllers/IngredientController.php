<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('welcome', compact(('ingredients')));
    }

    public function store(Request $request)
    {
        $newEntry = new Ingredient;
        $newEntry->name = $request->name;
        $newEntry->quantity = $request->quantity;
        $newEntry->src = $request->src;
        $newEntry->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Ingredient::find($id);
        $destroy->delete();
        // return redirect()->back();
        $ingredients = Ingredient::all();
        return view('welcome', compact(('ingredients')));
    }

    public function show($id)
    {
        $show = Ingredient::find($id);
        return view('show', compact('show'));
    }

    public function showData($id)
    {
        $data = Ingredient::find($id);
        return view('update', compact('data'));
    }

    public function update(Request $request)
    {
        return $request->input();
    }
}
