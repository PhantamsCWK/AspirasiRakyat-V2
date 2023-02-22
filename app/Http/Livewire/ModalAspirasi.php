<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Penduduk;
use App\Models\Aspirasi;
use App\Models\Category;

class ModalAspirasi extends Component
{
    public $keterangan;
    public $nik;
    public $category_id;

    public function mount() {
        $this->keterangan = "";
        $this->nik = "";
        $this->category_id = "";
    }

    

    

    public function render()
    {
        return view('livewire.components.modal-aspirasi', [
            'categories' => Category::select('id', 'name')->get(),
        ]);
    }
}
