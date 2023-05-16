<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.users.index', [
            'user' => User::all(),
        ]);
    }

    public function create()
    {
        $user = User::all();
        return view('dashboard.users.create', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('dashboard.users.update', [
            'user' => $user
        ]);
    }
}
