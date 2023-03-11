<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
	public function update(User $user, UpdateUserRequest $request)
	{
		// Update only the fields that are validated in UpdateUserRequest
		$user->update($request->except('is_admin'));

		return 'Success';
	}
}
