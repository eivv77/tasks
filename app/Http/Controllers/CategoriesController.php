<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $category = new category();
        $category->name = $request->input("name");
        $category->save();

        return response()->json([
            "message" => "success create"
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->input("name");

        $category->save();

        return response()->json([
        "message" => "success create"
    ], 201);

    }
    public function destroy($id)
    {
        $category  = Category::find($id);

        $category->delete();

        return response()->json([
            "message" => "success create"
        ], 200);

    }
}
