<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    private $passwd;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('generate.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $lenth = $request->input('lenth');
        if ($request->input('action') == 'save') {
            $site = $request->input('site');
            $username = $request->input('username');
            $email = $request->input('email');
            $lenth = $request->input('lenth');
            $category = $request->input('category');
            $password = $request->input('password');

            if (isset($site, $username, $email, $category)) {
                Passwords::create([
                    'site' => $site,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'category' => $category,
                ]);

            } else {
                //
            }

            return redirect()->route('home');
        }
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
    public function edit($id)
    {
        //

        $passwords = Passwords::findOrFail($id);

        return view('edit', compact('passwords'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $lenth = $request->input('lenth');
        if ($request->input('action') == 'save') {
            $site = $request->input('site');
            $username = $request->input('username');
            $email = $request->input('email');
            $lenth = $request->input('lenth');
            $category = $request->input('category');
            $password = $request->input('password');

            if (isset($site, $username, $email, $category)) {
                $passwords = Passwords::findOrFail($id);
                $passwords->update([
                    'site' => $site,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'category' => $category,
                ]);

            } else {
                //
            }

            return redirect()->route('home');
        }
        // if ($request->input('action') == 'generate') {
        //
        //     $caps = $request->input('caps') ?? 0;
        //     $numeric = $request->input('nums') ?? 0;
        //     $symbols = $request->input('symbols') ?? 0;
        //     $this->passwd = $this->generatePasswd($lenth, $caps, $numeric, $symbols);
        //
        //     $pass = $this->passwd;
        //     $passwords = Passwords::findOrFail($id);
        //
        //     return view('edit', compact('pass', 'passwords'));
        // }
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passwords $passwords)
    {
        //
    }
}
