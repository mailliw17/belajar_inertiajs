<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();

        return Inertia::render('User/Index', [
            'users' => $users
        ]);
    }

    public function show ($id) {
        $data = User::findOrFail($id);

        return Inertia::render('User/Detail', [
            'data' => $data
        ]);
    }

    public function destroy($id) {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->route('user')->with('message', 'User deleted !');
    }

    public function create() {
        return Inertia::render('User/Create');
    }

    public function store(Request $request) {

        // validasi
        $request->validate([
            'name' => 'required|',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        
        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);

        $newUser->save();

        return redirect()->route('user')->with('message', 'User created !');
    }

    public function edit($id) {
        $user = User::findOrFail($id);

        return Inertia::render('User/Edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id) {

        // validasi
        $request->validate([
            'name' => 'required|',
            'email' => 'required|email',
        ]);

        $data = $request->all();
        
        $item = User::findOrFail($id);
        $item->update($data);

        return redirect()->route('user')->with('message', 'User updated !');
    }
}
