<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{
  
    public function create()
    {
        return inertia('UserAccount/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $user = User::Create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]));
        Auth::login($user);

        return redirect()->route('product.index')->with('success','Account created');
    }

}