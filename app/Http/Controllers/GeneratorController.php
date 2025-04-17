<?php

namespace App\Http\Controllers;

use App\Models\Passwords;
use Faker\Factory as Faker;
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

    private function secureShuffle($string)
    {
        $array = str_split($string);
        $length = count($array);

        for ($i = $length - 1; $i > 0; $i--) {
            $j = random_int(0, $i);
            [$array[$i], $array[$j]] = [$array[$j], $array[$i]];
        }

        return implode('', $array);
    }

    private function sentance($length)
    {
        $faker = Faker::create();
        $sen = $faker->sentence(12);

        // Strip spaces and period, lowercased, limited to length+1 chars
        $str = str_replace([' ', '.'], '', strtolower($sen));
        $str = substr($str, 0, $length);

        return $str;
    }

    private function generatePasswd($length, $c = 0, $n = 0, $s = 0)
    {
        $chars = $this->sentance($length);
        $symbols = '!@#$%^&*()-_=+[]{}|,.<>?/';
        $length = strlen($chars);
        $chars = str_split($chars);

        // Make one char uppercase
        if ($c) {
            $chars[0] = strtoupper($chars[0]);

        }
        // Inject a symbol
        if ($s) {
            $chars[1] = $symbols[random_int(0, strlen($symbols) - 1)];
        }
        // Inject a digit
        if ($n) {
            $chars[2] = (string) random_int(0, 9);
        }

        return $this->secureShuffle(implode('', $chars));

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
        if ($request->input('action') == 'generate') {

            $caps = $request->input('caps') ?? 0;
            $numeric = $request->input('nums') ?? 0;
            $symbols = $request->input('symbols') ?? 0;
            $this->passwd = $this->generatePasswd($lenth, $caps, $numeric, $symbols);

            $pass = $this->passwd;

            return view('generate.index', compact('pass'));
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
        if ($request->input('action') == 'generate') {

            $caps = $request->input('caps') ?? 0;
            $numeric = $request->input('nums') ?? 0;
            $symbols = $request->input('symbols') ?? 0;
            $this->passwd = $this->generatePasswd($lenth, $caps, $numeric, $symbols);

            $pass = $this->passwd;
            $passwords = Passwords::findOrFail($id);

            return view('edit', compact('pass', 'passwords'));
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passwords $passwords)
    {
        //
    }
}
