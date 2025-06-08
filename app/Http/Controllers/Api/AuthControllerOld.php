<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'mobile_no' => 'required|string|min:10|max:15|unique:users',
            'password'  => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code'    => 422,
                'status'  => false,
                'message' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'mobile_no' => $request->mobile_no,
            'password'  => Hash::make($request->password),
        ]);

        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'code'    => 201,
            'status'  => true,
            'message' => 'Registration successful',
            'token'   => $token,
            'user'    => $user,
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)
            ->orWhere('mobile_no', $request->email)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'code'    => 401,
                'status'  => false,
                'message' => 'Invalid email/mobile or password',
            ], 401);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Login successful',
            'token'   => $token,
            'user'    => $user,
        ], 200);
    }

    public function profile(Request $request)
    {
        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Profile fetched successfully',
            'user'    => $request->user()
        ], 200);
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $user->update($request->only('name', 'email'));

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Profile updated successfully',
            'user'    => $user
        ], 200);
    }

    public function logout(Request $request)
{
    $user = $request->user();

    if ($user && $user->currentAccessToken()) {
        $user->currentAccessToken()->delete();

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Logged out successfully'
        ], 200);
    }

    return response()->json([
        'code'    => 401,
        'status'  => false,
        'message' => 'Unauthorized or token not found'
    ], 401);
}


    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'code'    => 404,
                'status'  => false,
                'message' => 'Email not found.'
            ], 404);
        }

        $code = rand(100000, 999999);

        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            ['token' => $code, 'created_at' => now()]
        );

        Mail::raw("Your verification code is: $code", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Password Reset Verification Code');
        });

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Verification code sent to your email.'
        ], 200);
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code'  => 'required'
        ]);

        $reset = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->code)
            ->first();

        if (!$reset) {
            return response()->json([
                'code'    => 400,
                'status'  => false,
                'message' => 'Invalid verification code.'
            ], 400);
        }

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Code verified successfully.'
        ], 200);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',
            'new_password'  => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'code'    => 404,
                'status'  => false,
                'message' => 'User not found.',
            ], 404);
        }

        $user->tokens->each(function ($token) {
            $token->delete();
        });

        $user->password = Hash::make($request->new_password);
        $user->save();

        DB::table('password_resets')->where('email', $request->email)->delete();

        return response()->json([
            'code'    => 200,
            'status'  => true,
            'message' => 'Password has been reset successfully. Please log in again.',
        ], 200);
    }
}
