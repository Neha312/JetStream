<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerUpdate extends Component
{
    public $c_id, $name, $email, $customerno, $check = true;
    public function mount()
    {
        $this->customers = Customer::all();
    }
    public function render()
    {
        return view('livewire.customer-update');
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required',
            'customerno' => 'required|min:2|max:10',
            'email' => 'required|email'
        ]);
    }
    public function updateCustomer()
    {
        $this->validate([
            'name' => 'required',
            'customerno' => 'required|min:2|max:10',
            'email' => 'required|email'
        ]);
        $customer = Customer::find($this->c_id);
        $customer->name = $this->name;
        $customer->email = $this->email;
        $customer->customerno = $this->customerno;
        $customer->save();
        $this->mount();
        $this->check = false;
    }
}
