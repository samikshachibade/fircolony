<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class FirData extends Component
{
    use WithFileUploads;

    public $complainant_name, $identity_proofs, $contact_number, $incident_date, $accused_name, $incident_location, $incident_description,$terms;
    public $uploadedFiles = [];
    public $loading = false;

    protected $rules = [
        'complainant_name' => 'required|string|max:255',
        'contact_number' => 'required|string|max:10|regex:/^([0-9\s\-\+\(\)]*)$/',
        'incident_date' => 'required|date',
        'accused_name' => 'nullable|string|max:255',
        'incident_location' => 'required|string',
        'incident_description' => 'required|string',
        'terms' => 'accepted',

    ];

    protected $messages = [
        'identity_proofs.max' => 'The identity proof must not be larger than 2.2MB.',
        'identity_proofs.file' => 'The uploaded file must be a valid file.',
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

    public function uploadIdentityProof()
    {
        if ($this->identity_proofs && $this->identity_proofs->getError() != UPLOAD_ERR_OK) {
            $this->addError('identity_proofs', 'Failed to upload file.');
            return;
        }

        if ($this->identity_proofs->getSize() > 2240 * 1024) { // 2.2MB in bytes
            $this->addError('identity_proofs', 'The identity proof must not be larger than 2.2MB.');
            return;
        }
        $this->loading = true;
        $path = $this->identity_proofs->store('identity_proofs', 'public');
        $this->loading = false;
        $this->uploadedFiles[] = $path;
        $this->reset('identity_proofs');

    }


    public function submitFir()
    {
        $validatedData = $this->validate();
        $validatedData['user_id'] = auth()->id();


        if ($this->uploadedFiles) {
            $validatedData['identity_proofs'] = json_encode($this->uploadedFiles);
            session(['firData' => $validatedData]);
            $this->dispatch('showPopup');
            return redirect('/payment');
        }
    }
}
