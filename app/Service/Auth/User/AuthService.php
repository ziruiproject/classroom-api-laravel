<?php

namespace App\Service\Auth\User;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;

interface AuthService
{
    public function registerUser($request);
    public function loginUser($request);
    public function logoutUser();
}
