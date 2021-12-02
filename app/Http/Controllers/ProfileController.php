<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'profile.name' => [
                'required',
                'max:191',
            ],
            'profile.email' => [
                'required',
                'max:191',
            ],
        ]);

        auth()->user()->update($request->profile ?? []);

        return 'Success';
    }
}
