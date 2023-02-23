<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public $name, $password, $notAdmin = false;

    public function login() 
    {
        $this->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'name' => $this->name,
            'password' => $this->password
        ])) {
            session()->regenerate();
            $this->notAdmin = false;
            return redirect()->intended('/dashboard');
        }

        $this->notAdmin = true;
    }

    public function render()
    {
        return view('livewire.home', [
            'active' => "home",
        ]);
    }
}
