<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'Phone_Number' => 'required|unique:users,Phone_Number',
            // 'Address' => 'required',
            'Username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/');
    }
}
