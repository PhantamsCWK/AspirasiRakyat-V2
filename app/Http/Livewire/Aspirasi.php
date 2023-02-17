<?php

namespace App\Http\Livewire;

use App\Models\Aspirasi as ModelsAspirasi;
use Livewire\Component;

class Aspirasi extends Component
{
    public function render()
    {
        return view('livewire.aspirasi', [
            'active' => "aspirasi",
            'aspirasis' => ModelsAspirasi::with(['category', 'penduduk'])->get()
        ]);
    }
}
