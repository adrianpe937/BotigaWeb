<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Muestra el formulario de registro
    public function showRegisterForm()
    {
        return view('register'); // Asegúrate de que la vista se llame "register"
    }

    // Procesa el registro
    public function register(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'username' => 'required|string|unique:usuarios,username',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|confirmed|min:6',
        ]);

        // Crear el usuario
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hasheamos la contraseña
        ]);

        // Autenticación automática del usuario recién registrado
        Auth::login($user);

        // Redirigir al usuario al dashboard o página de inicio
        return redirect()->intended('/dashboard');
    }

    // Muestra el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('login');
    }

    // Procesa el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['username' => 'Las credenciales son incorrectas.']);
    }

    // Cierra la sesión del usuario
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
