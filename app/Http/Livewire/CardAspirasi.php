<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardAspirasi extends Component
{
    public $aspirasi;
    public function render()
    {
        return view('livewire.components.card-aspirasi', [
            'aspirasi' => $this->aspirasi,
        ]);
    }
}
