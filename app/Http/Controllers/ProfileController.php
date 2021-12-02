<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'profile.name' => ['required'],
            'profile.email' => ['required']
        ]);

        auth()->user()->update([
            'name' => request('profile.name'),
            'email' => request('profile.email')
        ]);

        return 'Success';
    }
}
