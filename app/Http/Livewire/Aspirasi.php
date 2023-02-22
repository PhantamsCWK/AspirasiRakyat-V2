<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Penduduk;
use App\Models\Aspirasi as ModelsAspirasi;

class Aspirasi extends Component
{
    public $aspirasis, $active, $nik, $keterangan, $category_id, $categories;

    public function submit() {
        if($this->isNIKExist($this->nik)) {
            ModelsAspirasi::create([
                'nik' => $this->nik,
                'keterangan' => $this->keterangan,
                'category_id' => $this->category_id,
                'status' => 'menunggu',
            ]);
            return redirect('/aspirasi')->with('success', 'data berhasil di input');
        }
        return redirect('/aspirasi')->with('error', 'nik tidak terdaftar');
    }

    public function isNIKExist($nik) {
        return Penduduk::firstWhere('nik', $nik) !== null ? true : false;
    }

    public function render()
    {
        $this->categories = Category::select('id', 'name')->get();
        $this->aspirasis = ModelsAspirasi::all();
        $this->active = "aspirasi";
        return view('livewire.aspirasi');
    }
}
