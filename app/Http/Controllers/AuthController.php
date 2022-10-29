<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register (Request $rq){
        $fields = $rq->validate([
            'name' => 'required|string',
            'email'=> 'required|string|unique:users,email',
            'password' => 'required|string'
        ]);
        $user = User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
        ]);
        $token = $user->createToken('token')->plainTextToken;
        $response = [
            'user'=> $user,
            'token'=>$token
        ];
        return response($response, 201);    
    }

    public function login (Request $rq){
        $fields = $rq->validate([
            'email'=> 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::Where('email', $fields['email'])->first();
        if(!$user){
            return response([
                'message'=>'User does not exit!'
              ], 401); 
        }
        if(!Hash::check( $fields['password'], $user->password)){
            return response([
                'message'=>'Wrong Password!'
              ], 401); 
        }
        $token = $user->createToken('token')->plainTextToken;
        $response = [
            'user'=> $user,
            'token'=>$token
        ];
        return response($response, 201);    
   
    }

    public function logout (Request $rq){
        auth()->user()->tokens()->delete();
        return [
            'message'=> 'Logout Successfully!'
        ];    
     
    }
}