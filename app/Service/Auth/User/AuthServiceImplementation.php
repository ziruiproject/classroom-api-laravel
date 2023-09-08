<?php

namespace App\Service\Auth\User;

use App\Models\User;
use App\Helpers\ApiHelper\ApiHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Repository\User\UserRepositoryImplementation;

class AuthServiceImplementation implements AuthService
{

    protected $user;
    public function __construct(UserRepositoryImplementation $user)
    {
        $this->user = $user;
    }

    public function registerUser($request)
    {
        return $this->user->createUser($request);
    }

    public function loginUser($request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('api-token')->plainTextToken;
    }

    public function logoutUser()
    {
        return auth()->user()->tokens()->delete();
    }
}
