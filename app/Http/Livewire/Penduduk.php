<?php

namespace App\Http\Livewire;

use App\Models\Penduduk as ModelsPenduduk;
use Livewire\Component;

class Penduduk extends Component
{
    public $penduduks;


    public function render()
    {
        $this->penduduks = ModelsPenduduk::all();
        return view('livewire.penduduk');
    }
}
