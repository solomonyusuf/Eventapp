<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Record;

class RegisterPage extends Component
{
    use WithFileUploads;

    public $full_name;
    public $occupation;
    public $phone;
    public $passport;
    public $location;
    public $married;
    public $have_children;
    public $children_count;
    public $relationship_status;

    public $showConfirmModal = false;

    protected $rules = [
        'full_name'           => 'required|string|max:255',
        'occupation'          => 'required|string|max:255',
        'phone'               => 'nullable|string|max:20',
        'location'            => 'required|string|max:255',
        'married'             => 'required|in:Yes,No',
        'have_children'       => 'required|in:Yes,No',
        'children_count'      => 'nullable|numeric|min:0|max:20',
        'relationship_status' => 'required|in:single,married,divorced',
    ];

    public function openConfirmModal()
    {
        $this->validate();

        $this->showConfirmModal = true;
    }

    public function submit()
    {
        $this->validate();

        $path = $this->passport->store('passports', 'public');

        Record::create([
            'meta_data' => json_encode([
                'full_name'           => $this->full_name,
                'occupation'          => $this->occupation,
                'phone'               => $this->phone,
                'location'            => $this->location,
                'married'             => $this->married,
                'passport'              => $path,
                'have_children'       => $this->have_children,
                'children_count'      => $this->children_count,
                'relationship_status' => $this->relationship_status,
            ])
        ]);

        $this->reset([
            'full_name', 'occupation', 'phone', 'location', 'married',
            'have_children', 'children_count', 'relationship_status',
            'showConfirmModal'
        ]);

        session()->flash('success', 'Registration submitted successfully!');
    }


    public function render()
    {
        return view('register-page');
    }
}
