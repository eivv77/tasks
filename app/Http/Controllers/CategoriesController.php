<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();

//        return response()->json($categories);

        return CategoryResource::collection($categories);
    }

    public function store(StoreCategoryRequest $request)
    {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|unique:posts|max:255',
//            'description' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return response(['message' => 'error']);
//        }

        $category = new category();
        $category->name = $request->input("name");
        $category->save();


        return new CategoryResource($category);
//        return response()->json([
//            "message" => "success create"
//        ], 201);
    }

    public function update(StoreCategoryRequest $request, $id)
    {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|unique:posts|max:255',
//            'description' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return response(['message' => 'error']);
//        }

        $category = Category::findOrFail($id);

//        if (!$category) return response()->json(['message' => 'category  ' .$id  .   ' not found']);

        $category->name = $request->input("name");

        $category->save();

        return new CategoryResource($category);


//        return response()->json([
//        "message" => "success create"
//        ], 201);

    }
    public function destroy($id)
    {
        $category  = Category::findOrFail($id);

        // if (!$category) return response()->json(['message' => 'category  ' .$id  .   ' not found']);

        $category->delete();

        return response()->json([
            "message" => "success create"
        ], 200);

    }

    public function show($id){

        $category = Category::findOrFail($id);

//        if (!$category) return response()->json(['message' => 'category  ' .$id  .   ' not found']);

//        return response()->json($category);

        return new CategoryResource($category);
    }
}
