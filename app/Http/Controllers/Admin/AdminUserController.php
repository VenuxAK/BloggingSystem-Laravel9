<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function users()
    {
        return view('admin.users', [
            "users" => User::latest()->paginate(10)->withQueryString()
        ]);
    }
    public function create()
    {
        return view('admin.create-user');
    }
    public function store()
    {
    }
    public function edit(User $user)
    {
        return view('admin.edit-user', [
            "user" => $user
        ]);
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
