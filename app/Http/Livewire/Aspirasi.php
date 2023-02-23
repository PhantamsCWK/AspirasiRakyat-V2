<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Penduduk;
use App\Models\Aspirasi as ModelsAspirasi;

class Aspirasi extends Component
{
    public $categories, $aspirasis = [], $nik, $keterangan, $category_id, $searchNIK;

    protected $rules = [
        'nik' => 'required',
        'category_id' => 'required',
        'keterangan' => 'required'
    ];

    public function submit() {
        $this->validate();

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

    public function findAspirasi()
    {
        $this->aspirasis = ModelsAspirasi::where('nik', $this->searchNIK)->with(['category', 'penduduk'])->get();
    }

    public function isNIKExist($nik) {
        // dd(Penduduk::where('nik', $nik)->get()->count());
        return Penduduk::where('nik', $nik)->get()->count() === 0 ? false : true;
    }

    public function render()
    {
        $this->categories = Category::all();
        // $this->aspirasis = ModelsAspirasi::with(['category', 'penduduk'])->get();

        return view('livewire.aspirasi', [
            'active' => "aspirasi"
        ]);
    }
}
