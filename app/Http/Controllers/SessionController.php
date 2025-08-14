<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $user = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! auth()->attempt($user)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry ,Those Credentials do not match our records.',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');


    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        auth()->logout();

        return redirect('/');
    }
}
