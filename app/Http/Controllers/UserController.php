<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Affiche le formulaire d'inscription
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Traite l'inscription de l'utilisateur
    public function register(Request $request)
    {

        // Validation et création de l'utilisateur...
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

       // Auth::login($user);
        return redirect()->route('login')->with('success', 'Inscription réussie ! Vous êtes maintenant connecté.');
    }

    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Traite la connexion de l'utilisateur
    public function login(Request $request)
    {
        // Validation et authentification...
    }

    // Déconnexion de l'utilisateur
    public function logout()
    {
        // Logique de déconnexion...
    }
}
