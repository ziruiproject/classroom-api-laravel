<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper\ApiHelper;
use App\Http\Requests\UserRegisterRequest;
use App\Service\Management\User\UserManagementServiceImplementation;

class UserController extends Controller
{
    private $user;

    public function __construct(UserManagementServiceImplementation $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user->index();
    }

    public function show($id)
    {
        return $this->user->show($id);
    }

    public function update(UserRegisterRequest $request, $id)
    {
        return $this->user->update($request, $id);
    }

    public function delete($id)
    {
        return $this->user->delete($id);
    }
}
