<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            // TASK: imagine that in the Blade the fields are
            // <input name="profile[name]" ... />
            // <input name="profile[email]" ... />
            // Write validation rules, so both name and email are required
            'profile.name' => 'required',
            'profile.email' => 'required'
        ]);

        auth()->user()->update($request->profile ?? []);

        return 'Success';
    }
}
