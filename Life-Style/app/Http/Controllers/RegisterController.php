<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'lastname' => 'required|max:15',
            'name' => 'required|min:3|max:15',
            'pseudo' => 'required',
            'email' => 'required',
            'password' => 'required|min:7',
        ]);

        $validation['password'] = Hash::make($request->password);

        User::create($validation);
        return redirect('/login');
    }
}
