<?php

namespace App\Service\Management\User;

use Illuminate\Http\Request;

interface UserManagementService
{
    public function index();
    public function show($id);
    public function update($request, $id);
    public function store($request);
    public function delete($id);
}
