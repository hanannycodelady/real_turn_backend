<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Redirect to Google authentication.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google callback.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {
                $newUser = User::create([
                    'First_name' => $user->user['given_name'] ?? $user->name,
                    'Last_name' => $user->user['family_name'] ?? '',
                    'Email_address' => $user->email,
                    'google_id' => $user->id,
                    'Password' => bcrypt('12345678'),
                    'Contact' => '',
                ]);

                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Google authentication failed');
        }
    }

    /**
     * Redirect to Apple authentication.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToApple()
    {
        return Socialite::driver('apple')->redirect();
    }

    /**
     * Handle Apple callback.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleAppleCallback()
    {
        try {
            $user = Socialite::driver('apple')->user();
            $finduser = User::where('apple_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {
                $newUser = User::create([
                    'First_name' => $user->name ?? explode(' ', $user->name)[0] ?? '',
                    'Last_name' => explode(' ', $user->name)[1] ?? '',
                    'Email_address' => $user->email,
                    'apple_id' => $user->id,
                    'Password' => bcrypt('12345678'),
                    'Contact' => '',
                ]);

                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Apple authentication failed');
        }
    }
}
