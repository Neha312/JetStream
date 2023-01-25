<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentList extends Component
{
    public $name;
    public function mount($name)
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.student-list');
    }
}
