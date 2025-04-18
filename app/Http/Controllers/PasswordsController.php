<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Illuminate\Http\Request;

class PasswordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $passwords = Passwords::all();

        return view('home', compact('passwords'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
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
    public function show(Passwords $passwords)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passwords $passwords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Passwords $passwords)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $passwords = Passwords::findOrFail($id);
        $passwords->delete();

        return redirect()->route('home');
    }
}
