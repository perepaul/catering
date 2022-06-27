<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.password');
    }

    public function change(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'max:191'],
            'password' => ['required', 'string', 'max:191', 'confirmed'],
        ]);
        $user = User::find(auth()->user()->id);
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'current password is incorrect']);
        } elseif ($request->input('current_password') == $request->input('password')) {
            return back()->withErrors(['password' => 'current password was entered']);
        }

        $user->update([
            'password' => $request->input('password'),
        ]);

        return back()->withSuccess('Password updated');
    }
}
