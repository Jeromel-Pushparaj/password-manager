<?php

namespace App\Livewire;

use App\Models\Passwords;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = '';

    public function render()
    {
        $passwords = [];
        if (strlen($this->search) >= 1) {
            $passwords = Passwords::where('site', 'like', '%'.$this->search.'%')->limit(7)->get();

            return view('livewire.search-bar', compact('passwords'));
        }
        $passwords = Passwords::all();

        return view('livewire.search-bar', compact('passwords'));

    }
}
