<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //show a login form
    public function create()
    {
        return view('sessions.create');
    }



    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => ['required']
        ]);

        //attempt to authenticate the user
        if (!auth()->attempt($attributes)) {

            //if authentication fails, redirect back to the login page using the withInput() method .....
            // return back()
            //     ->withInput()
            //     ->withErrors(['email' => 'Your provided credentials could not be verified.']);


            //if authentication fails, redirect back to the login page using the ValidationException class.....
            throw  ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }


        session()->regenerate();

        //redirect to the home page
        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye!');
    }
}
