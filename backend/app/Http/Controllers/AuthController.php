<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function signup(SignUpRequest $request)
    {

        $request->password = bcrypt($request->password);
        $user = User::create($request->validated());

        $token = $user->createToken(Str::random())->plainTextToken;

        return $this->success('Created', ['token' => $token], 201);
    }

    public function signin(SignInRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->error('Invalid login/password', 401);
        }

        return $this->success('Signed in',
            ['token' => $user->createToken(Str::random())->plainTextToken],
            200
        );
    }
}
