<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    // Menampilkan register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Menampilkan Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    //register
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
        ], [
            'username.required' => 'Isi Kolom Username !',
            'password.required' => 'Isi Kolom Password !',
            'role.required' => 'Pilih role !',
        ]);

        // Create a new user instance
        $user = User::create([
            'username' => $validatedData['username'],
            'role' => $validatedData['role'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // You can optionally log in the user after creating the account
        // Auth::login($user);
        if ($user) {
            // Redirect to the user's profile or desired page
            return redirect()->intended(route('login'));
        }

        return back()->withErrors([]);
    }

    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);

        // Delete the related records
        $user->borrower()->delete();
        $user->supervisor()->delete();
        $user->pic()->delete();
        $user->admin()->delete();

        // Delete the user
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password', 'role');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $role = $credentials['role'];
            switch ($role) {

                case 'peminjam':
                    return redirect()->route('peminjam.dashboard');
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'pic':
                    return redirect()->route('pic.dashboard');
                case 'penanggung-jawab':
                    return redirect()->route('supervisor.dashboard');
                default:
            }
        }

        return back()->withErrors([
            'username' => 'Username atau Password anda salah'
        ]);

    }

    public function __construct() 
    {
        $this->middleware('guest', ['except' => 'login']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
}

