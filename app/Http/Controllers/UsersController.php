<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\Users\CreateUserRequest;

class UsersController extends BaseController
{
    public function index()
    {
    }

    public function create()
    {
        return view('users.create');
    }

    public function createConfirm(CreateUserRequest $request)
    {
        if ($request->method() == 'POST') {
            $request->flashExcept('_token');
        }

        return view('users.create_confirm');
    }

    public function store(CreateUserRequest $request)
    {
    }

    public function show(User $user)
    {
    }

    public function edit(User $user)
    {
    }

    public function update(User $user)
    {
    }

    public function delete(User $user)
    {
    }
}