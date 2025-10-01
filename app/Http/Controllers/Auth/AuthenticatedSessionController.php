<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {        if (Auth::check()) {
            return back()->withErrors([
                'email' => 'Anda sudah login sebagai ' . Auth::user()->email . '. Silakan logout dulu untuk masuk dengan akun lain.'
            ]);
        }

        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->is_logged_in) {
            Auth::logout();
            return back()->withErrors([
                'email' => 'Akun ini sedang digunakan di perangkat lain.'
            ]);
        }

        $user->update(['is_logged_in' => true]);

        if ($user->hasRole('superadmin')) {
            return redirect()->route('super.dashboard');
        } elseif ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('cpd')) {
            if ($user->profiles && $user->profiles->status !== 'active') {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Akun Anda belum diaktivasi admin atau ditolak.'
                ]);
            }
            return redirect()->route('cpd.dashboard');
        }

        return redirect('/');
    }
    public function destroy(Request $request): RedirectResponse
{
    $user = Auth::user();

    if ($user) {
        $user->update(['is_logged_in' => false]);
    }

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login')->with('status', 'Anda sudah logout.');
}

}
