<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login-form');
//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
      public function login(Request $request)
    {
         // Cek apakah variabel tersedia
        if (isset($request->username) && isset($request->password)) {
            $username = $request->username;
            $password = $request->password;

            // Login sederhana (contoh)
            if ($username === 'admin' && $password === '123') {
                return redirect('/auth')->with('success', 'Login berhasil!');
            } else {
                return back()->with('error', 'Username atau Password salah!');
            }
        } else {
            return back()->with('error', 'Form tidak lengkap!');
        }
    }

}
