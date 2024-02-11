<?php

namespace App\Livewire\Auth;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;

class Register extends Component
{
    public $name, $father_name, $mother_name, $surname, $address, $aadhaar_number, $pancard_number, $mobile_number, $email, $state, $city, $terms,$password;

    protected $rules = [
        'name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'mother_name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'aadhaar_number' => 'required|string|max:12',
        'pancard_number' => 'required|string|max:10',
        'mobile_number' => 'required|string|max:10',
        'email' => 'required|string|email|max:255',
        'state' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'terms' => 'accepted',
    ];

    public function render()
    {
        return view('livewire.auth.register');
    }
    public function register()
    {

            $validatedData = $this->validate();

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password), // You should collect a password or generate one
                'mother_name'=>$this->mother_name,
                'father_name'=>$this->father_name,
                'surname'=>$this->surname,
                'address'=>$this->address,
                'aadhaar_number'=>$this->aadhaar_number,
                'pancard_number' => $this->pancard_number,
                'mobile_number'=>$this->mobile_number,
                'state'=>$this->state,
                'city'=>$this->city,
            ]);

            auth()->login($user);
            event(new Registered($user));
            $this->dispatch('showPopup');
        return redirect('/');
    }
}
