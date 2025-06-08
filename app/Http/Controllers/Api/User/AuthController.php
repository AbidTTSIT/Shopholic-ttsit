<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'mobile'   => 'required|string|digits:10|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'mobile'   => $request->mobile,
            'password' => Hash::make($request->password),
        ]);

        if (!$user) {
            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong!',
            ], 500);
        }

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'status'  => true,
            'message' => 'User registered successfully!',
            'user'    => $user,
            'token'   => $token,
        ], 200);
    }

    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
          'email' => 'required',
          'password' => 'required|min:6',
        ]);

        if($validate->fails())
        {
            return response()->json([
                  'status' => false,
                  'message' => $validate->errors()
            ], 422);
        }

        $credentials = $request->only('email', 'password');
        if(!$token = JWTAuth::attempt($credentials))
        {
            return response()->json([
             'status' => false,
             'message' => 'invalid email or password'
            ], 401);
        }

        return response()->json([
            'status' => true,
            'message' => 'User Login Successfully',
            'user' => auth()->user(),
            'token' => $token
        ], 200);
    }
}
