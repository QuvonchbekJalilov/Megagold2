<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $admin = User::skip(1)->limit(2)->get();
        return view('auth.index')->with('admins', $admin);
    }

    public function edit(User $profile)
    {
        return view('auth.edit', compact('profile'));
    }

    public function update(Request $request, User $profile)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        // Foydalanuvchini olish
        $user = Auth::user();

        // Eski parolni tekshirish
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Eski parol noto\'g\'ri']);
        }

        // Yangilash
        $profile->update([
            'name' => $request->name,
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('profile.index')->with('success', 'Parol muvaffaqiyatli o\'zgartirildi');
    }
}
