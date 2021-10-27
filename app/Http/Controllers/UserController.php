<?php

namespace App\Http\Controllers;

use datatables;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.user.index', [
            'users' => User::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $data['name'] = $request->name;
        // $data['username'] = $request->username;
        // $data['email'] = $request->email;
        // $data['is_admin'] = $request->is_admin;
        // $data['password'] = Hash::make($data['password']);
        // User::insert($data);

        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'username' => ['required', 'min:3', 'max:15', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'is_admin' => 'required',
            'password' => 'required|min:5|max:191',
        ]);

        // Cara 1 enkripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // Cara 2 enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Cara 1 enkripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // Cara 2 enkripsi password

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
