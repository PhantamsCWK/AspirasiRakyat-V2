<?php

namespace App\Http\Livewire;

use App\Models\Penduduk as ModelsPenduduk;
use Livewire\Component;

class Penduduk extends Component
{
    public function render()
    {
        return view('livewire.admin.penduduk',[
            'penduduks' => ModelsPenduduk::all()
        ]);
    }
}
