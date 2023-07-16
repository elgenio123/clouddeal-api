<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class AuthResetPasswordController extends Controller
{
    //
    public function showResetPasswordForm(Request $request, $token)
    {
        return view('guest.auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                    'remember_token' => Str::random(60),
                ])->save();

               $user->setRememberToken(Str::random(60)); // Réinitialiser le jeton "remember_token" pour se déconnecter de toutes les sessions existantes.

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('auth.login')->with('status', 'Votre mot de passe a été réinitialisé avec succès.')
            : redirect()->back()->withErrors(['email' => [__($status)]]);
    }
}
