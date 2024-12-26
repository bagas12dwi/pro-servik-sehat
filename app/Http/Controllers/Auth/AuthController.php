<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function indexRegister()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function indexReset()
    {
        return view('auth.reset-password', [
            'title' => 'Reset Password'
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:users,name',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:6',
            'phone_number' => 'required'
        ]);

        $email = $validated['email'];
        $password = bcrypt($validated['password']);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $email;
        $user->password = $password;
        $user->role = "user";
        $user->phone_number = $validated['phone_number'];
        $user->save();

        $input = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function login(Request $request)
    {
        $input = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        $level = User::where('email', $input['email'])->value('role');

        if ($level == 'admin') {
            if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
            return back()->with('error', 'Email atau Password tidak sesuai !');
        } elseif ($level == 'user') {
            if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
            return back()->with('error', 'Email atau Password tidak sesuai !');
        }
        return back()->with('error', 'Email atau Password tidak sesuai !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
