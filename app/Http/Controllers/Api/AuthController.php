<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller {
    public function register(Request $request){
        $request->validate([
            //'name'          => ['required'],
            'username'          => ['required'],
            //'email'         => ['required','email','unique:users'],
            'password' =>  ['required','min:6','confirmed'],
            'password_confirmation' =>  ['required'],
        ]);

        User::create([
            //'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json(['msg' => 'Registrado exitosamente']);
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            //'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
        //$user = User::where('email', $request->email)->first();
        $user = User::where('username', $request->username)->first();
    
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'username' => 'El nombre de usuario está mal escrito o no coincide con ninguno registrado',
            ]);
        }
        return $user->createToken($request->device_name)->plainTextToken;
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['msg' => 'Logout successful']);
    }
}
