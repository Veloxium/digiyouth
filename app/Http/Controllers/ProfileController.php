<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }



    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::id()); // pastikan user sudah login

        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'bio' => 'required|string|max:100',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan file gambar jika ada
        if ($request->hasFile('profile_picture')) {
            // Hapus gambar lama jika ada
            if ($user->profile_picture) {
                Storage::delete('public/user/profile/' . $user->profile_picture);
            }

            $image = $request->file('profile_picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/user/profile', $imageName);
            $user->profile_picture = $imageName;
        }

        // Update data user
        $user->name = $request->name;
        $user->class = $request->class;
        $user->bio = $request->bio;
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}
