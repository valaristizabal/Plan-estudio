<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->scopes(['openid', 'profile', 'email'])->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Verifica el dominio del correo
        $emailDomain = substr(strrchr($googleUser->email, "@"), 1);

        if (!in_array($emailDomain, ['miugca.edu.co', 'ugca.edu.co'])) {
            return redirect()->route('login')->withErrors('Solo los correos de miugca.edu.co y ugca.edu.co están permitidos.');
        }

        // Check if the user already exists
        $user = User::where('google_id', $googleUser->id)->first();

        if (!$user) {
            // Create a new user if not exists
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'password' => bcrypt('password'), // Puedes generar una contraseña o dejarla vacía
            ]);
        }

        Auth::login($user, true);

        return redirect()->route('select-format'); // Redirige a la vista select-format
    }
}
