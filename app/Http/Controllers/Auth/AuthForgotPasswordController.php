<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;

class AuthForgotPasswordController extends Controller
{
    //
    public function showForgotPasswordForm()
    {
        return view('guest.auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('password.reset')->with('status', 'Un lien de réinitialisation de mot de passe a été envoyé à votre adresse e-mail.')
            : redirect()->back()->withErrors(['email' => __($status)]);
    }

}
