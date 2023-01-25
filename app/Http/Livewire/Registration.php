<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Http\Request;

class Registration extends Component
{
    public $name, $customerno, $email, $customers, $c_id, $check = true;

    public function mount()
    {
        $this->customers = Customer::all();
    }
    public function render()
    {
        $this->mount();
        return view('livewire.registration');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required',
            'customerno' => 'required|min:2|max:10',
            'email' => 'required|email'
        ]);
    }
    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'customerno' => 'required|min:2|max:10',
            'email' => 'required|email'
        ]);
        //dd($this->name, $this->email, $this->customerno);
        $customer = new Customer;
        $customer->name = $this->name;
        $customer->customerno = $this->customerno;
        $customer->email = $this->email;
        $customer->save();
        $this->resetFilters();
        $this->check = false;
    }
    public function resetFilters()
    {
        //livewire default function
        $this->reset(['name', 'customerno', 'email']);
    }
    public function clear()
    {
        redirect()->route('register');
    }
}
