<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{
    // public function __construct()
    // {
    //     if (auth()->user() && auth()->user()->role == "user") {
    //         return redirect('/');
    //     }
    // }
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
        $validatedData = request()->validate([
            "name" => ["required", "min:3", "max:75"],
            "username" => ["required", "min:3", "max:75", Rule::unique('users', 'username')],
            "email" => ["required", "email", "max:100", Rule::unique('users', 'email')],
            "password" => ["required", "min:6", "max:254"],
            "role" => ["required", "min:4", "max:11", Rule::in(["super_admin", "admin", "user"])],
            "gender" => ["required", "min:4", "max:6", Rule::in(["male", "female"])]
        ]);
        $validatedData["avatar"] = request()->file('avatar') ? request()->file('avatar')->store('avatar') : NULL;
        User::create($validatedData);
        return redirect('/admin/users')->with('message', 'New user created successful');
    }
    public function edit(User $user)
    {
        return view('admin.edit-user', [
            "user" => $user
        ]);
    }
    public function update(User $user)
    {
        $validatedData = request()->validate([
            "name" => ["required", "min:3", "max:75"],
            "username" => ["required", "min:3", "max:75", Rule::unique('users', 'username')->ignore($user->id)],
            "email" => ["required", "email", "max:100", Rule::unique('users', 'email')->ignore($user->id)],
            "role" => ["required", "min:4", "max:11", Rule::in(["super_admin", "admin", "user"])],
            "gender" => ["required", "min:4", "max:6", Rule::in(["male", "female"])]
        ]);
        $validatedData["avatar"] = request()->file('avatar') ? request()->file('avatar')->store('avatar') : $user->avatar;
        $user->update($validatedData);
        return redirect('/admin/users')->with('message', 'Updated user successful');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/users')->with('message', 'Deleted user successful');
    }
}
