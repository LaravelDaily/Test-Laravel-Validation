<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
	public function update(ProfileRequest $request)
	{
		auth()->user()->update($request->profile ?? []);

		return 'Success';
	}
}
