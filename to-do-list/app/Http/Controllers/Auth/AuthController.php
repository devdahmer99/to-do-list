<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        dd($validator);
    }

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        User::create($data);
        return redirect(route('login'));
        
    }


}
