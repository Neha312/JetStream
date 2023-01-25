<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Student extends Component
{
    public $students = ['Neha', 'Jinal', 'Anju'];
    public function render()
    {
        return view('livewire.student');
    }
}
