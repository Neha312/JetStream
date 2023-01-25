<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerList extends Component
{
    public $c_id, $name, $email, $customerno, $check = true;
    public function mount()
    {
        $this->customers = Customer::all();
    }
    public function render()
    {
        return view('livewire.customer-list');
    }
    public function deleteCustomer($id)
    {
        Customer::find($id)->delete();
        $this->mount();
    }
    public function updateCustomer($id)
    {
        $this->c_id = $id;
        $customer = Customer::find($id);
        $this->name = $customer->name;
        $this->customerno = $customer->customerno;
        $this->email = $customer->email;
        $this->check = false;
    }
    public function register()
    {
        redirect()->route('register');
    }
}
