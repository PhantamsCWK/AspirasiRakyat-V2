<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AspirasiCardDashboard extends Component
{
    public $aspirasi;
    public $status;

    public function mount() {
        switch ($this->aspirasi->status) {
            case 'proses':
                $this->status = 'warning';
                break;
            case 'selesai':
                $this->status = 'success';
                break;
            default:
                $this->status = 'secondary';
                break;
        }
    }

    public function sendAspirasiId($id)
    {
        $this->emit('setAspirasiId', $id);
    }

    public function render() {
        return view('livewire.components.aspirasi-card-dashboard', [
            "aspirasi" => $this->aspirasi,
            "status" => $this->status
        ]);
    }
}
