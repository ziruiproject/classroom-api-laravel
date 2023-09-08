<?php

namespace App\Repository\User;

use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;

interface UserRepository
{
    public function getUsers();
    public function getUserById(string $id);
    public function updateUser($request, $id);
    public function createUser($request);
    public function deleteUser($id);
}
