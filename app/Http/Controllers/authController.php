<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Services\authServices;
use App\Services\userServices;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\registerRequest;

class authController extends Controller
{
    public function showLogin() {
        return(view('auth.login'));
    }

    public function showRegister() {
        return(view('auth.register'));
    }


    public function login(LoginRequest $loginRequest , userServices $userServices) {
        $user = $userServices->existeUser($loginRequest->email);

        if(!$user) {
            return redirect()->back()->with('error' , 'Ce email existe pas');
        }

        if(!Hash::check($loginRequest->password , $user->password)) {
            return redirect()->back()->with('error' , 'Le mot de pass est incorrecte');
        }

        Auth::login($user);
        $loginRequest->session()->regenerate();

        session([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'user_email' => $user->email
        ]);

        return redirect('/home')->with('success', 'Bienvenue ' . $user->name . '!');
    }

    public function register(registerRequest $registerRequest , userServices $userServices , authServices $authServices) {
        $user = $userServices->existeUser($registerRequest->email);

        if($user) {
            return redirect()->back()->with('error' , 'Ce email est existe!');
        }

        $data = [
            'name' => $registerRequest->name,
            'email' => $registerRequest->email,
            'password' => Hash::make($registerRequest->password)
        ];

        $newUser = $authServices->createAccount($data);

        Auth::login($newUser);

        $registerRequest->session()->regenerate();

        session([
            'user_id' => $newUser->id,
            'user_name' => $newUser->name,
            'user_email' => $newUser->email
        ]);

        return redirect('/home')->with('success' , 'Vous creer votre compte en succe');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
