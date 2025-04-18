<?php

namespace App\Livewire;

use Faker\Factory as Faker;
use Livewire\Component;

class Genpass extends Component
{
    public $passwd;

    public $caps = '';

    public $nums = '';

    public $symbols = '';

    public $length = '';

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

    public function generate()
    {

        $this->passwd = $this->generatePasswd($this->length, $this->caps, $this->nums, $this->symbols);

    }

    public function render()
    {
        $passwd = $this->passwd;

        return view('livewire.genpass', compact('passwd'));
    }
}
