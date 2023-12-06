<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;


        // TASK: change this line to not allow is_admin field to be updated
        // Update only the fields that are validated in UpdateUserRequest
class UserController extends Controller
{
    public function update(User $user, UpdateUserRequest $request)
    {
        // Update only the fields that are validated in UpdateUserRequest
        $user->update($request->validated());

        // Ensure is_admin is not updated
        if ($request->has('is_admin')) {
            abort(403, 'Unauthorized action.'); // or any other logic to handle unauthorized update
        }

        return 'Success';
    }
}

    

