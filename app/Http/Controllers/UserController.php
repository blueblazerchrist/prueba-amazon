<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        $user = new User();
        $fields = $user->getFillable();
        $requestFields = $request->only($fields);
        $user->create($requestFields);

        return response()->json([
            'message' => 'Registro exitoso.',
        ], 201);

    }
}
