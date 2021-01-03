<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudentLoginController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'admin_status' => 0])) {
            $request->session()->regenerate();

            return redirect()->intended('student-dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
}
