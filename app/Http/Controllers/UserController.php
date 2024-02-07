<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function update(User $user, UpdateUserRequest $request)
    {
        // TASK: change this line to not allow is_admin field to be updated
        // Update only the fields that are validated in UpdateUserRequest
        $user->update($request->safe()->except(['is_admin']));

        return 'Success';
    }
}
