<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use http\Env\Response;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['message' => 'error']);
        }

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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['message' => 'error']);
        }

        $tag = Tag::find($id);
        if (!$tag) return response()->json([
            'message' => 'tag ' .$id  .   ' not found'
        ]);

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

        if (!$tag) return response()->json(['message' => 'tag  ' .$id  .   ' not found']);

        $tag->delete();

        return response()->json([
            "message" => "success create"
        ], 200);

    }


    public function show($id){

        $tag = Tag::find($id);

        if (!$tag) return response()->json(['message' => 'tag  ' .$id  .   ' not found']);

        return response()->json($tag);
    }
}
