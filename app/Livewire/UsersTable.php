<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersTable extends Component
{
    public $search = '';
    public $sortField = 'created_at'; // Default sorting field
    public $sortAsc = true; // Sorting direction
    public function render()
    {
        $users = User::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate(10);

        return view('livewire.users-table', [
            'users' => $users
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
}
