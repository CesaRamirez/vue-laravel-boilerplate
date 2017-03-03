<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterFormRequest;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{

    protected $auth;

    /**
     * Auth Controller Constructor
     * @param \Tymon\JWTAuth\JWTAuth $auth
     */
    public function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    public function register(RegisterFormRequest $request)
    {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $this->auth->attempt($request->only('email', 'password'));

        return response()->json([
            'data' => $user,
            'meta' => [
                'token' => $token
            ]
        ], 200);
    }
}
