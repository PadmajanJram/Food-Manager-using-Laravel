<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|max:100|string',
            'email' => 'required|max:100|string',
            'password'=>'required|max:100|string',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => bcrypt($request->password),
        ]);

        // Return a success response
        return response()->json(['message' => 'User registered successfully'], 201);
    }


    public function login(Request $request){
        $user = User::where('email',$request->email)->first();
        if(Hash::check($request->password,$user->password)){
            $token = $user->createToken('app-token')->plainTextToken;
            return response()->json([
                'email' => $request->email,
                'password' => $request->password,
                'token' => $token,
                'message'=> 'The credentials are valid',
                'status' => 200
            ]);
        }else{
            return response()->json([
                'email' => $request->email,
                'password' => $request->password,
                'message' => 'The credentials are invalid',
                'status' => 250
            ]);
        }
    }
}
