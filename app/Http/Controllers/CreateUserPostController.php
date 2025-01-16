<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateUserPostController extends Controller
{
    public function createPost(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'post_owner' => 'required|exists:users,id',  
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation error',
                'messages' => $validator->errors()
            ], 422);
        }

        $data = $request->only(['title', 'content', 'post_owner']);

     
        $user_post = UserPost::create($data);

        
        return response()->json([
            'success' => 'User post created successfully',
            'post' => $user_post
        ], 201);
    }
}
