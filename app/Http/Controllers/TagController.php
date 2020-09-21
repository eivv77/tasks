<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
       $tags = Tag::all();
       return view('tags.index', ['tags'=>$tags]);

    }

    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->input("name");
        $tag->description = $request->input("description");
        $tag->save();
        return response()->json([
            "message" => "success create"
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);

        $tag->name = $request->input("name");
        $tag->description = $request->input("description");

        $tag->save();

        return response()->json([
            "message" => "success create"
        ], 200);

    }

    public function destroy($id)
    {
        $tag = Tag::find($id);

        $tag->delete();

        return response()->json([
            "message" => "success create"
        ], 200);

    }
}
