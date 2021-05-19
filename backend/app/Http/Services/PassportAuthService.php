<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class PassportAuthService
{
    public function __construct()
    {
    }

    public function register($request)
    {
        $user = new User();
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->avatar = $request->avatar;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->role_id = $request->role_id;
        $passwordHash = Hash::make($request->password);
        $user->password = $passwordHash;
        $user->save();
        $response = Http::asForm()->post('http://localhost/oauth/token', [
            "grant_type" => "password",
            "client_id" => 2,
            "client_secret" => "DYVi5KVfl0KpWdcAlrEr6ZEEHccdxMbOzoLH4IUp",
            "username" => $request->email,
            "password" => $request->password,
        ]);

        return $response->json();
    }

    public function login($request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response(['data' => 'User not found']);
        }
        if (Hash::check($request->password, $user->password)) {
            $response = Http::asForm()->post('http://localhost/oauth/token', [
                "grant_type" => "password",
                "client_id" => 2,
                "client_secret" => "DYVi5KVfl0KpWdcAlrEr6ZEEHccdxMbOzoLH4IUp",
                "username" => $request->email,
                "password" => $request->password,
            ]);

            return response(['data'=> json_decode((string) $response->getBody(),true), 'user'=>$user]);
        }
    }
}
