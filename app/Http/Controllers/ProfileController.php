<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        $user = $request->user();

        $profile = $user->profile;

        return view('portfolio.edit-profile', compact('user', 'profile'));
    }

    public function update(Request $request)
    {
        // 1. Validate input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
        ]);

        // 2. Get logged-in user
        $user = $request->user();

        // 3. Update user name
        $user->update([
            'name' => $validatedData['name'],
        ]);

        // 4. Update or create profile
        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'bio' => $validatedData['bio'] ?? null,
                'phone' => $validatedData['phone'] ?? null,
                'location' => $validatedData['location'] ?? null,
            ]
        );

        // 5. Redirect back
        return redirect()
            ->route('profile.edit')
            ->with('success', 'Profile updated successfully.');
    }
}
