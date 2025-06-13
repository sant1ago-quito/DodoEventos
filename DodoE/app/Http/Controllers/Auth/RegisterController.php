<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ModelUsuarios; // Asegúrate de importar tu modelo
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:tblusuarios',
            'contraseña' => 'required|min:8|confirmed',
            'rol' => 'required', // Validación para rol
        ]);

        $user = ModelUsuarios::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contraseña' => Hash::make($request->contraseña),
            'rol' => $request->rol,
        ]);

        auth()->login($user);

        return redirect()->route('landing')->with('success', 'Registration successful!');
    }
}
