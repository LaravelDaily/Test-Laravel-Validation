<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validate([
            'profile' => [
                'name' => 'required',
                'email' => 'required'
            ],
        ]);

        auth()->user()->update($validated ?? []);

        return 'Success';
    }
}
