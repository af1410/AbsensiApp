<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string',
            'alamat' => 'nullable|string|max:255',
            'no_hp' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'required|string|min:8',
        ]);

        $user = User::findOrFail($user->id);
        $user->update($request->all());

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
