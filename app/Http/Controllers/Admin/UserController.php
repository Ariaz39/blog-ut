<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        $user->createToken($user->name)->plainTextToken;

        return response()->json([
            'status' => 200,
            'msg' => 'Registro de usuario exitoso.'
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();

        if (isset($user->id)){
            if (Hash::check($request->password, $user->password)){
                // Crear el token
//                $token = $user->createToken('auth_token')->plainTextToken;
                // Si esta todo bn
                return response()->json([
                    'status' => 200,
                    'msg' => 'Usuario logueado exitosamente.',
                    'access_token' => $user->createToken($user->name)->plainTextToken
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'msg' => 'Contrasenia incorrecta.',
                ], 404);
            }
        } else {
            return response()->json([
                'status' => 404,
                'msg' => 'El usuario no se encuentra registrado.',
            ], 404);
        }
    }

    public function userProfile()
    {
        return response()->json([
            'status' => 200,
            'msg' => 'Perfil listado correctamente.',
            'data' => Auth()->user()
        ]);
    }

    public function logout()
    {
        Auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 200,
            'msg' => 'Sesion cerrada correctante.'
        ]);
    }
}
