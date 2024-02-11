<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class FirData extends Component
{
    use WithFileUploads;

    public $complainant_name, $identity_proof, $contact_number, $incident_date, $accused_name, $incident_location, $incident_description;


    protected $rules = [
        'complainant_name' => 'required|string|max:255',
        'contact_number' => 'required|string|max:10|regex:/^([0-9\s\-\+\(\)]*)$/',
        'incident_date' => 'required|date',
        'accused_name' => 'nullable|string|max:255',
        'identity_proof'=>'nullable|file|max:5000',
        'incident_location' => 'required|string',
        'incident_description' => 'required|string',
    ];


    public function render()
    {
        return view('livewire.fir');
    }

    public function mount()
    {
        if (!auth()->check()) {
            return redirect(route('login'));
        }
    }

    public function submitFir()
    {
        $validatedData = $this->validate();

        $validatedData['user_id'] = auth()->id();

        if (isset($this->identity_proof)) {
            $filePath = $this->identity_proof->store('identity_proofs', 'public');
            $validatedData['identity_proof'] = $filePath;
            session(['firData' => $validatedData]);
            $this->dispatch('showPopup');
            return redirect('/payment');
        }
    }
}
