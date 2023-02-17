<?php

namespace App\Http\Livewire;

use Livewire\Component;
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

    public function submit() {
        Aspirasi::create([
            'nik' => $this->nik,
            'keterangan' => $this->keterangan,
            'category_id' => $this->category_id,
            'status' => 'menunggu',
        ]);

        return redirect('/home');
    }

    public function render()
    {
        return view('livewire.components.modal-aspirasi', [
            'categories' => Category::select('id', 'name')->get(),
        ]);
    }
}
