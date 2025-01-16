<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;

class RegisterUserController extends Controller
{
    public function registerUser(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

       
        $token = JWTAuth::fromUser($user);

      
    // I made use of this to test for Dummy Users     $users = User::factory()->count(5)->create();

        return response()->json([
            'user' => $user,
            'token' => $token,
          
        ]);
    }
}
