<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavbarAspirasi extends Component
{
    public $active;

    public function render()
    {
        return view('livewire.components.navbar-aspirasi', [
            'active' => $this->active
        ]);
    }
}
