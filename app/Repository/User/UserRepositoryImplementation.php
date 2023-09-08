<?php

namespace App\Repository\User;

use App\Repository\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserRepositoryImplementation implements UserRepository
{
    public function createUser($request)
    {
        return User::create($request->all());
    }

    public function getUsers()
    {
        return User::all();
    }

    public function getUserById(string $id)
    {
        return User::find($id);
    }

    public function updateUser($request, $id)
    {
        return $this->getUserById($id)->update($request->all());
    }

    public function deleteUser($id)
    {
        return $this->getUserById($id)->delete();
    }
}
