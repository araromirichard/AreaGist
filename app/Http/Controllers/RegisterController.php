<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    
    public function store()
    {
        $userData = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'min:5', Rule::unique('users', 'username')],
            'email' => ['required','email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:7']
        ]);
        
       $user = User::create($userData);
       
       Auth::login($user);
        
        return redirect('/')->with('success', 'Your account has been created.');
    }
}
