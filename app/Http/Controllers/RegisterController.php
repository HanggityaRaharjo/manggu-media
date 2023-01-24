<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('guest.register');
    }
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ]);
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return 'berhasil create';
    }
}
