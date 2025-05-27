<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{
    public ?int $id = null; // This matches the {id} from the route
    public $name;
    public $email;
    public $phone;
    public $address;

    // Load customer details when the component mounts
    public function mount()
    {
        $customer = Customer::findOrFail($this->id);
        $this->customerId = $customer->id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
        $this->address = $customer->address;
    }

    public function updateCustomer()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'nullable|email', // email optional
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        $customer = Customer::findOrFail($this->id);
        $customer->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);

        session()->flash('message', 'Customer updated successfully.');
        return redirect()->route('customers.create');
    }

    public function render()
    {
        return view('livewire.customers.editcustomer');
    }
}
