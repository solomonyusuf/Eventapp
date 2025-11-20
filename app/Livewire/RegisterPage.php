<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Record;

class RegisterPage extends Component
{
    use WithFileUploads;

    public $full_name;
    public $email;
    public $phone;
    public $passport;

    public $showConfirmModal = false;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'email'     => 'required|email|max:255',
        'phone'     => 'required|string|max:20',
        'passport'  => 'required|image|mimes:jpg,jpeg,png|max:5048',
    ];

    public function openConfirmModal()
    {
        $this->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'required|string|max:20',
            'passport'  => 'required|image|mimes:jpg,jpeg,png|max:5048',
        ]);

        $this->showConfirmModal = true;
    }

    public function submit()
    {
        $this->validate();

        $path = $this->passport->store('passports', 'public');

        Record::create([
            'meta_data' => json_encode([
                'full_name' => $this->full_name,
                'email'     => $this->email,
                'phone'     => $this->phone,
                'passport'  => $path,
            ])
        ]);

        $this->reset(['full_name', 'email', 'phone', 'passport', 'showConfirmModal']);
        session()->flash('success', 'Registration submitted successfully!');
    }


    public function render()
    {
        return view('register-page');
    }
}
