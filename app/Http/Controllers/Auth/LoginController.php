<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    /**
     * Display login view
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle authentication request
     */
    public function store(LoginRequest $request)
    {
        $credentials = $request->validated();

        $attempt = Auth::attempt($credentials, $request->boolean('remember'));

        if (!$attempt) {
            return redirect()->back()->with('error', 'incorrect username or password');
        }
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect()->to(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session
     */
    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
