<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalLogin extends Component
{
    public $username;
    
    public function render()
    {
        return view('livewire.components.modal-login');
    }
}
