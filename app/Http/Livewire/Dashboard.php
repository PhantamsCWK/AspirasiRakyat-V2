<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Aspirasi;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $aspirasis, $idUpdate, $feedback = "", $categories, $category, $status, $searchDate;

    public function mount()
    {
        $this->categories = Category::all();
        $this->category = "";
    }

    public function setId($id)
    {
        $this->idUpdate = $id;
        $this->emit('openModalFeedback');
    }

    public function resetform()
    {
        $this->idUpdate = "";
        $this->feedback = "";
    }

    public function update()
    {
        $aspirasi = Aspirasi::find($this->idUpdate);

        switch ($aspirasi->status) {
            case 'menunggu':
                $aspirasi->status = "proses";
                break;
                case 'proses':
                $aspirasi->status = "selesai";
                break;
        }
        $aspirasi->feedback = $this->feedback;

        $aspirasi->save();

        $this->emit('closeModal');

        $this->resetform();

        session()->flash('status', 'berhasil');
    }

    public function logout()
    {
        Auth::logout();
 
        session()->invalidate();
 
        session()->regenerateToken();
 
        return redirect('/');
    }


    public function render()
    {
        $this->aspirasis = Aspirasi::where('status', 'LIKE', "%{$this->status}%")->with(['penduduk', 'category'])
                            ->when($this->category, fn ($query, $category) => $query->where('category_id', $category))
                            ->when($this->searchDate, fn ($query, $searchDate) => $query->whereDate('created_at', $searchDate) )->get();

        return view('livewire.dashboard');
    }
}
