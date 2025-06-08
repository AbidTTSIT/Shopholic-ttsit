<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
{
    return Socialite::driver('google')->stateless()->redirect();
}


  public function handleGoogleCallback()
{
    try {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate([
            'email' => $googleUser->getEmail()
        ], [
            'name' => $googleUser->getName(),
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
        ]);

        Auth::login($user);

        return response()->json([
            'code' => '200',
            'status' => 'success',
            'message' => 'Login successful via Google',
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'code' => '500',
            'status' => 'error',
            'message' => 'Google login failed',
            'error' => $e->getMessage(),
        ], 500);
    }
}



    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
{
    $fbUser = Socialite::driver('facebook')->fields([
        'name', 'first_name', 'last_name', 'email'
    ])->user();

    $user = User::updateOrCreate([
        'email' => $fbUser->getEmail()
    ], [
        'name' => $fbUser->getName(),
        'facebook_id' => $fbUser->getId(),
        'avatar' => $fbUser->getAvatar(),
    ]);

    Auth::login($user);

    return response()->json([
        'status' => 'success',
        'message' => 'Login successful via Facebook',
        'user' => [
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar
        ]
    ]);
}

}

