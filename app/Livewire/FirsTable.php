<?php

namespace App\Livewire;

use App\Models\Fir;
use Livewire\Component;

class FirsTable extends Component
{
    public $search = '';
    public $sortField = 'created_at'; // Default sorting field
    public $sortAsc = true; // Sorting direction
    public $selectedStatuses = [];

    public function render()
    {

        $firs = Fir::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate(10);

        return view('livewire.firs-table', [
            'firs' => $firs
        ]);
    }

    public function updateFirStatus($firId, $statusProperty)
    {
        $fir = Fir::find($firId);

        if ($fir) {
            $fir->update(['current_status' => $statusProperty]);
           $this->dispatch('showPopup');
        }

    }
}
