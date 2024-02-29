<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class ProfileUpdate extends Component
{
    public $name, $email, $mother_name, $father_name, $surname, $address, $aadhaar_number, $pancard_number, $mobile_number, $state, $city;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->mother_name = $user->mother_name;
        $this->father_name = $user->father_name;
        $this->surname = $user->surname;
        $this->address = $user->address;
        $this->aadhaar_number = $user->aadhaar_number;
        $this->pancard_number = $user->pancard_number;
        $this->mobile_number = $user->mobile_number;
        $this->state = $user->state;
        $this->city = $user->city;
    }


    public function updateProfile()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'mother_name' => 'nullable|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'surname' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'aadhaar_number' => 'nullable|numeric|digits:12',
            'pancard_number' => 'nullable|string|max:10',
            'mobile_number' => 'nullable|numeric|digits:10',
            'state' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'mother_name' => $this->mother_name,
            'father_name' => $this->father_name,
            'surname' => $this->surname,
            'address' => $this->address,
            'aadhaar_number' => $this->aadhaar_number,
            'pancard_number' => $this->pancard_number,
            'mobile_number' => $this->mobile_number,
            'state' => $this->state,
            'city' => $this->city,
        ]);
        $this->dispatch('showPopup');
        $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.profile-update');
    }
}
