<?php

namespace App\Service\Management\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\User\UserRepositoryImplementation;
use App\Service\Management\User\UserManagementService;

class UserManagementServiceImplementation implements UserManagementService
{

    protected $user;

    public function __construct(UserRepositoryImplementation $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user->getUsers();
    }

    public function show($id)
    {
        return $this->user->getUserById($id);
    }

    public function update($request, $id)
    {
        return $this->user->updateUser($request, $id);
    }

    public function store($request)
    {
        return $this->user->createUser($request);
    }

    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }
}
