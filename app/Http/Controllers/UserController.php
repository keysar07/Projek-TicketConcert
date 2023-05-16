<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('dashboard.users.index', [
            'user' => User::all(),
            'roles' => $roles,
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
        $roles = Role::pluck('name', 'name')->all();
        return view('dashboard.users.update', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }
}
