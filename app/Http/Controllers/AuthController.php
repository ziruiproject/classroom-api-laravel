<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper\ApiHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Service\Auth\User\AuthServiceImplementation;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(AuthServiceImplementation $auth)
    {
        $this->auth = $auth;
    }

    public function register(UserRegisterRequest $request)
    {
        // return $request->validated();
        $user = $this->auth->registerUser($request);
        return ApiHelper::formatApi($user);
    }

    public function login(UserLoginRequest $request)
    {
        return $this->auth->loginUser($request);
    }

    public function logout()
    {
        return $this->auth->logoutUser();
    }
}
