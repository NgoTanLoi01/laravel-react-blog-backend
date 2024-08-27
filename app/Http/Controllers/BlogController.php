<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::all();
    }

    public function show()
    {
        return Blog::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:10',
            'author' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Please fix the errors',
                'errors' => $validator->errors()
            ]);
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        $blog->shortDesc = $request->shortDesc;
        $blog->save();

        return response()->json([
            'status' => true,
            'message' => 'Blog created successfully',
            'data' => $blog
        ]);
    }

    public function update()
    {
        return Blog::all();
    }

    public function destroy()
    {
        return Blog::all();
    }
}
