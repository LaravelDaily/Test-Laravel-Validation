<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function update(User $user, UpdateUserRequest $request)
    {
        $user->update($request->except('is_admin'));

        return 'Success';
    }
}   
